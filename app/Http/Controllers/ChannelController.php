<?php

namespace App\Http\Controllers;
use App\Channel;
use App\Tag;
use Carbon\Carbon;
use App\Http\Requests\ChannelRequest;
use App\Http\Controllers\Controller;

class ChannelController extends Controller
{
    /** 
    * Create a new ChannelController instance
    * @param 
    */
    // TODO    

    /** 
    * List the channels
    * @param 
    */
    public function index() {
    	$channels = Channel::latest('published_at')->published()->get();
    	return view('channels.index', compact('channels'));

    }
    /** 
     * Show channel
     * @param $id
     */
    public function show($id) {
    	$channel = Channel::findOrFail($id);
    	// return $channel;
    	return view('channels.show', compact('channel'));
    }
    /** 
     * Create a channel
     * @param $date
     */
    public function create() {
        $tags = Tag::lists('name', 'id');
    	return view('channels.create', compact('tags'));
    }
    /** 
     * Save the channel
     * @param $request 
     */
    public function store(ChannelRequest $request) {
        $this->createChannel($request);
    	return redirect('channels');
    }
    /** 
     * Edit the channel
     * @param $id
     */
    public function edit($id) {
        $channel = Channel::findOrFail($id);
        $tags = Tag::lists('name', 'id');
        $tag_list = $channel->tags->lists('name');

        return view('channels.edit', compact('channel', 'tags', 'tag_list'));
    }
    /** 
     * Update the channel
     * @param $id
     * @param $request
     */
    public function update($id, ChannelRequest $request) {
       $channel = Channel::findOrFail($id);
       $this->syncTags($channel, $request->input('tag_list'));
       return redirect('channels');
    }

    /** 
     * Sync up the list of tags in the database
     * @param $id
     * @param $request
     */
    private function syncTags(Channel $channel, array $tags) {
        $channel->tags()->sync($tags);
    }
    /** 
     * Save a new channel
     * @param $request
     */
    private function createChannel(ChannelRequest $request) {
        $channel = Channel::create($request->all());
        // $channel = Auth::user()->articles()->create($request->all());
        $this->syncTags($channel, $request->input('tag_list'));
    }


}

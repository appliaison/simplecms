<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;

use App\Http\Requests;
use App\Tag;
use App\Http\Controllers\Controller;

class TagController extends Controller
{

    /** 
    * Create a new TagController instance
    * @param 
    */
    // TODO    
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
        /** 
    * List the tags 
    * @param $date
    */
    public function index() {
        
    	$tags = Tag::all();

    	// return $articles;
    	// return view('articles.index')->with('articles', $articles);
    	return view('tags.index', compact('tags'));

    }
    /** 
     * Show tag
     * @param $id
     */
    public function show($id) {
    	$tag = Tag::findOrFail($id);
    	// return $tag;
    	return view('tags.show', compact('tag'));
    }
    /** 
     * Create a tag
     * @param $date
     */
    public function create() {
        $tags = Tag::lists('name');
        //TODO The following line should be removed or refactored since getTagListAttribute
        // is supposed to handle this
        $tag_list = Tag::lists('name', 'id');
        return view('tags.create', compact('tags', 'tag_list'));
    }
    /** 
     * Save the tag
     * @param $request 
     */
    public function store(TagRequest $request) {
    	// $input['published_at'] = Carbon::now(); 
    	// Tag::create(Request::all());
        Tag::create($request->all());
    	return redirect('tags');
    	// return $input;
    }
    /** 
     * Edit the tag
     * @param $date
     */
    public function edit($id) {
        $tag = Tag::findOrFail($id);
        $tag_list = Tag::lists('name', 'id');
        return view('tags.edit', compact('tag', 'tag_list'));
    }
    /** 
     * Update the tag
     * @param $date
     */
    public function update($id, TagRequest $request) {
       $tag = Tag::findOrFail($id);
       $tag->update($request->all()); 
       return redirect('tags');
    }
}

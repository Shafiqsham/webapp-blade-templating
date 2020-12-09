<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/*class catController extends Controller
{
    public function index() {

        $catName = 'Meoww Simba';
        $catID = '555';
    
        return view('about')->with('catName', $catName)->with('catID',$catID);
    
   
}*/

/*class catController extends Controller
{
    public function about() {
        return view('about');
    }
    public function team() {
        return view('team');
    }
    public function services() {
        
        $services = array(
            'Service 1', 'Service 2'
        );
        return view('services', compact('services'));
    } 
   
}*/

class catController extends Controller
{
    public function master() {
        return view('ebook.master');
    }
    public function nav() {
        return view('ebook.nav');
    }
    public function about(){
        return view('ebook.about');
    }
    public function list() {

        $data = array(
        array ('Harry Potter and the Deathly Hollows', 1597846320, 'Adventure', 350),
        array ('The Queens Gambit', 1624987520, 'Action', 361),
        array ('Secret Recipe', 1478539467, 'Education', 299),
        array ('Anime Manga', 1679403827, 'Animation', 150),
        array ('World of war',1379420864, 'Action', 500)
        );
    return view('ebook.list')->with('data', $data);
    }
}

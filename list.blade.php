@extends('layouts.app')

@section('content')
<h1>List of e-Books</h1>

<?php

for($i=0; $i <=4; $i++)
{
    print 'Title: ' .$data[$i][0].'<br>';
    print 'ISBN: ' .$data[$i][1].'<br>';
    print 'Category: '.$data[$i][2].'<br>';
    print 'No. of Pages: '.$data[$i][3].'<br>';
    print '<br>';

}

?>
@endsection
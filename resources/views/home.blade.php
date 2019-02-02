@extends('layouts.app')

@section('content')
<b-container fluid  style=" height: calc(100vh - 76px);">
    <b-row class="h-100" no-gutters>
        <b-col cols="3">
            <list-contact></list-contact>
        </b-col>
        <b-col cols="9">
            <Conversation></Conversation>
        </b-col>
    </b-row>
</b-container>
@endsection
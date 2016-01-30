@extends('master')


@section('title')
	Compose Article
@endsection


@section('content')
<div class="modal-body">

    <form id="addArticle" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    	<label>Title</label>

    	<input type="text" class="form-control" name="title"/>
    	<br/>

    	<label>Body</label>
    	<textarea class="form-control" cols="50" rows="10"  name="body"></textarea>
    	<br/>

    	<input type="submit" value="Publish" class="btn btn-primary">
    </form>

    <div id="response-log" style="color:green;">
        
    </div>

    	<br/>
    	<a href="/informatics/public/blog"><<</a>
</div>

@endsection

@section('jscripts')

    <script type="text/javascript">

        $(document).ready(function () {

            $("#addArticle").on("submit", function () {
                $.ajax({
                    url: "{{ URL::to('/') }}/blog/submitArticle",
                    method: "POST",
                    data: $('#addArticle').serialize(),
                    dataType: 'json',
                    success: function (data) {
                        $('#response-log').html(data.message);

                    },
                    error: function (xhr, status, errorThrown) {
                        alert("There was a problem on the controller");
                    }
                });
                return false;
            });

        });

    </script>

@endsection
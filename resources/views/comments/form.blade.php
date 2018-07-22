<h4>Comments</h4>
{!!Form::open( ['method' => 'POST'] )!!}
    <div class="form-group">
        {{Form::label('message', 'Message' )}}
        {{Form::textarea('comment_message', null ['class' => 'form-control', 'placeholder' => 'Enter Text Message Here' ] )}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary' ] )}}
{!!Form::close()!!}
@include ('admin.header')
<div class="container">
        <div class="row">
            <div class="col s10 offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulario con ckeditor</div>
 
                    <div class="panel-body">
                        <form action="{{route('adminSavePosts')}}" method="post">
                             	@csrf
								<textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80">Este es el textarea que es modificado por la clase ckeditor
                            </textarea>
                            <button type="submit">Guardar.</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include ('admin.footer')
<h2>Новый отдел</h2>
<div class="row align-items-start">
    <div class="col"></div>
    <div class="col">
        <form action="updivision" method="get">
            <input type="hidden"  name="id" value=<?=$division['id']?>>
            <div class="form-group"> 
                <label for="name">Название отдела</label><br><br>  
                <input type="text" class="form-control" name="name_otdel" value= "<?=$division['name_otdel']?>">
                </div>
                <br>
            <div class="form-group"><input type="submit"  class="btn btn-primary" value="Добавить"></div>
        </form>
    </div>
    <div class="col"></div>
</div>
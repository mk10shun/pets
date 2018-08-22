<div class="col-sm-8 blog-main">
    <h1>Add a dog</h1>
    <form method="POST" action="/dogs">
        @csrf
      <div class="form-group">
        <label for="title">Dog name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="body">Owner email</label>
        <input type="text" class="form-control" id="id" name="email">
      </div>
      <button type="submit" class="btn btn-primary">add</button>
    </form>
</div>

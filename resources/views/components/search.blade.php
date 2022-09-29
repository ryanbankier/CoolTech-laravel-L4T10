<div>
    <div class="container"><!--add styling here-->
        <div class="row">
            <form action="{{route('search-result')}}" method="post">
                @csrf
                <div class="row mb-2">
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-sm" name="search" placeholder="Search">
                            <span class="text-danger">@error('search'){{$message}}@enderror</span>
                        </div> 
                        <div class="col-auto">
                        <select name="filter" id="" class="form-select form-select-sm">
                            <option value="id">Article ID</option>
                            <option value="category">Category</option>
                            <option value="tags">Tags</option>
                        </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                        </div>
                                           
                </div>
            

            </form>
        </div>
        
    </div>
    
</div>
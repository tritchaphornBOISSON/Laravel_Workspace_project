<div style="margin-top:50px; margin-left:50px;">
<a href="{{ route('dashboard') }}" >Back to my Space</a></div>
<div class="mx-auto pull-left"style=" margin-left:450px;">

            <div class="" style="margin-top:-30px;">
                <form action="{{ route('annonces.index') }}" method="GET" role="search">

                    <div class="input-group">
                    <span class="fas fa-search"></span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term" style="margin-bootom:50px;">
                        <a href="{{ route('annonces.index') }}" class=" mt-1" ></span>

                        
                            <span class="input-group-btn" style=" float:right; ">
                                <button class="btn btn-danger" type="button" title="Refresh page" style="float:right;">
                                    <span class="fas fa-sync-alt" style="font-size:10px; padding-right:20px;">Refresh</span>
                                </button>
                            </span>
                            <span class="input-group-btn mr-5 mt-1"  style="float:right; margin-left:550px;" > 
                            <button class="btn btn-info" type="submit" title="Search projects"  >
                            <span class="fas fa-sync-alt" style="font-size:10px; padding-left:7px;"> search</span>
                            </button>
                        </span>

                        </a>
                    </div>
                </form>
              
            </div></div>

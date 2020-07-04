
<?php include 'qheader.php'; ?>

    <div class="wrap d-block mx-auto">
        <div class="card mb-3 text-white bg-primary">
            <div class="card-header">
                <div class="float-left">
                    <strong>Holy Quran</strong>
                </div>
                <div class="float-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="float-left">
                    <input type="button" id="btnFavorites" class="btn btn-sm btn-warning" value="Load Favorites">
                </div>                
                <div class="float-right">
                    <form action="#" id="frmSearch">
                        <div class="float-left">
                            <input type="text" required id="search" class="form-control small" placeholder="Search Translation">
                        </div>
                        <div class="float-left">&nbsp;</div>
                        <div class="float-right">
                            <input type="submit" id="searchBtn" class="btn btn-sm btn-info" value="Search">
                            <div class="float-none"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <select name="chapter" id="chapter" class="form-control" disabled>
                            <option value="">Select Chapter</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="result">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">
                    <div class="float-left">
                        <strong class="info"></strong>
                    </div>
                    <div class="float-right">
                        <select name="verse" id="verse" style="color: #000;">
                            <option value="">GoTo Verse</option>
                        </select>
                    </div>
                    <div class="float-right">&nbsp;&nbsp;&nbsp;</div>
                    <div class="float-right">
                        <span class="badge badge-warning count">Total Verses: 00</span>
                    </div>
                    <div class="float-none"></div>
                </div>
                <div class="card-body main"></div>
            </div>
        </div>
    
        <div id="top" class="bg-warning" style="display:none;">&uarr;</div>
    </div>

    
<?php include 'qfooter.php'; ?>
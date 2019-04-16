<div class="page">
    <div class="page-content container-fluid">
        <div class="col-md-12">
            <div class="panel panel-bordered" id="panel_load">
                <div class="panel-heading">
                    <h3 class="panel-title">Golongan Darah</h3>
                </div>
                <div class="panel-body">
                    <div id="isi_panel"></div>
                </div>
            </div>

            <div class="panel panel-bordered" id="panel_preview" style="display:none;">
                <div class="panel-heading">
                    <h3 class="panel-title">Preview</h3>
                </div>
                <div class="panel-body">
                    <div id="isi_panel_prev">
                        
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary" onclick="backFromPrev();">Kembali</button>
                </div>
            </div>

            <div class="panel panel-bordered" id="panel_create" style="display:none;">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah</h3>
                </div>
                <div class="panel-body">
                    <div id="isi_panel"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require 'golongan_darah/controller/ct_gol_darah.php';
?>
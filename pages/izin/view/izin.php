<div class="page">
    <div class="page-content container-fluid">
        <div class="col-md-12">
            <div class="panel panel-bordered" id="panel_load">
                <div class="panel-heading">
                    <h3 class="panel-title">Halaman Izin</h3>
                    <ul class="panel-actions panel-actions-keep">
                        <li>
                            <button type="button" class="btn btn-success" onclick="keTambah();">Tambah Data <i class="icon md-plus"></i></button>
                        </li>
                    </ul>
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
                    <div id="isi_panel_prev"></div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary" onclick="backFromPrev();">Kembali</button>
                </div>
            </div>

            <div class="panel panel-bordered" id="panel_create" style="display:none;">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data</h3>
                </div>
                <div class="panel-body">
                    <div id="isi_panel_tambah"></div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary" onclick="backFromCreate();"><i class="icon md-long-arrow-left"></i>Kembali</button>
                    <button type="button" class="btn btn-primary" onclick="insert_data();">Simpan <i class="icon md-download"></i></button>
                </div>
            </div>
            <div class="panel panel-bordered" id="panel_edit" style="display:none;">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Data</h3>
                </div>
                <div class="panel-body">
                    <div id="isi_panel_edit"></div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary" onclick="backFromEdit();"><i class="icon md-long-arrow-left"></i>Kembali</button>
                    <button type="button" class="btn btn-primary" onclick="update_data();">Simpan <i class="icon md-download"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require 'izin/view/modal_hapus.php';
    require 'izin/controller/ct_izin.php';
?>
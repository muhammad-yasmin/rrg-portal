<script src="../dist/global/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
    function loadData(){
        $.ajax({
            url : 'job_title/model/load_data.php',
            data : {},
            success: function(data){
                $("#isi_panel").html(data);
            },
            error: function(xhr){
                alert("gagal ambil data");
            }
        })
    }
    loadData();

    function loadPreview(id){
        $.ajax({
            url: 'job_title/model/prev_data.php',
            type: 'post',
            data: { id : id },
            success: function(data){
                $("#isi_panel_prev").html(data);
            },
            error: function(xhr){
                alert("gagal ambil data");
            }
        });
    }

    function loadFormTambah(){
        $.ajax({
            url: 'job_title/view/tambah_data.php',
            data: { },
            success: function(data){
                $("#isi_panel_tambah").html(data);
            },
            error: function(xhr){
                alert("gagal ambil data");
            }
        });
    }

    function prosesInsert(){
        $.ajax({
            url: 'job_title/model/proses_insert.php',
            type: 'post',
            data: {
                kode : $("#kode_job").val(),
                job : $("#job_title").val()
            },
            success: function(data){
                alert("Data Berhasil Ditambah");
                loadData();
                keLoad();
            },
            error: function(xhr){
                alert("Gagal");
            }
        })
    }

    function loadFormEdit(id){
        $.ajax({
            url: 'job_title/view/edit_data.php',
            type: 'post',
            data: {
                ID: id
            },
            success: function(data){
                $("#isi_panel_edit").html(data);
            },
            error: function(xhr){
                alert("Gagal");
            }
        })
    }

    function update_data(){
        $.ajax({
            url: 'job_title/model/proses_edit.php',
            type: 'post',
            data: {
                ID : $("#ID").val(),
                kode : $("#kode_job").val(),
                job : $("#job_title").val()
            },
            success: function(data){
                alert("Data Berhasil Di ubah");
                loadData();
                keLoad();
            },
            error: function(xhr){
                alert("Gagal");
            }
        })
    }

    function insert_data(){
        prosesInsert();
    }

    function btnPreview(id){
        kePreview();
        loadPreview(id);
    }

    function btnEdit(id){
        keEdit();
        loadFormEdit(id);
    }
    function btnHapus(id){
        $.ajax({
            url: 'job_title/view/isi_modal.php',
            type: 'post',
            data: { id: id},
            success: function(data){
                $("#isi_modal").html(data);
            },
            error: function(xhr){
                alert("Gagal");
            }
        });
    }
    function hapus(){
        //var id = $("#ID").text();
        $.ajax({
            url: 'job_title/model/proses_hapus.php',
            type: 'post',
            data: {
                ID : $("#ID").val()
            },
            success: function(data){
                $("#modalHapus").modal('toggle');
                loadData();
            },
            error: function(xhr){
                alert("Gagal hapus");
                $("#modalHapus").modal('toggle');
            }
        })
    }
    function backFromPrev(){
        keLoad();
    }
    function backFromCreate(){
        keLoad();
    }
    function backFromEdit(){
        keLoad();
    }

    function kePreview(){
        $("#panel_load").hide('slow', function(){
            $("#panel_create").hide('slow', function(){
                $("#panel_preview").show('slow');
            })
        })
    }
    function keLoad(){
        $("#panel_preview").hide('slow', function(){
            $("#panel_create").hide('slow', function(){
                $("#panel_edit").hide('slow', function(){
                    $("#panel_load").show('slow');
                })
            })
        })
    }
    function keTambah(){
        $("#panel_load").hide('slow', function(){
            $("#panel_preview").hide('slow', function(){
                $("#panel_create").show('slow', function(){
                    loadFormTambah();
                });
            })
        })
    }
    function keEdit(){
        $("#panel_load").hide('slow', function(){
            $("#panel_preview").hide('slow', function(){
                $("#panel_create").hide('slow', function(){
                    $("#panel_edit").show('slow');
                });
            })
        })
    }
</script>
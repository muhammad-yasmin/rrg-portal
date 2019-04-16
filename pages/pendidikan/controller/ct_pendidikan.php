<script src="../dist/global/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
    function loadData(){
        $.ajax({
            url : 'pendidikan/model/load_data.php',
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
            url: 'pendidikan/model/prev_data.php',
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

    function btnPreview(id){
        kePreview();
        loadPreview(id);
    }

    function backFromPrev(){
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
                $("#panel_load").show('slow');
            })
        })
    }
</script>
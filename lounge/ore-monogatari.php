<!DOCTYPE HTML>
<html>
    <head>
        <title>Ruang Staff Wagnaria</title>
        <script src="files/js/jquery.min.js"></script>
        <script src="files/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="files/bootstrap/css/bootstrap.min.css">
		<link rel="shortcut icon" href="http://puu.sh/jrAiZ/9dc12f8cf1.png"/>
        <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
        </style>
</head>
    <body onLoad="muatDaftarData();">
        
        <div class="col-md-8 col-md-offset-2" ng-controller="listContactCtrl">
            <div class="page-header">
                <h1>
                    Ore Monogatari!!
                </h1>
                <ul class="nav nav-pills">
                  <li><a id="nav-list-data" href="javascript:void(0);" onClick="gantiMenu('list-data');">Ngesub</a></li>
                 
				  <li><a id="nav-info" href="javascript:void(0);" onClick="gantiMenu('info');">Info Proyek</a></li>
                </ul>

            </div>
            
			
            <div id="list-data" class="well">
                <iframe src="https://docs.google.com/forms/d/1Z0Jxhx44ZDARqqpqNzk6J-Zh3K_8wAhtAokbJjET5lw/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Memuat...</iframe>
            </div>
			 <div id="info" class="well" style="display:none;"> 
			 <form id="form-data">
                <thead>
<tr>
<th><h1>Info</h1></th>
</tbody>
</table>
<table width="90%" border="0.5">
 <tr>
    <td width="21%" bgcolor="#FFFFFF"><span class="style7">&nbsp;</span></td>
    <td width="28%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
	<td width="15%" bgcolor="#FFFFFF"><div align="right" class="style10">&nbsp;</div></td>
    <td width="36%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
  </tr>
   <tr>
    <td width="21%" bgcolor="#FFFFFF"><span class="style7">&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
    <td width="28%" bgcolor="#FFFFFF">&nbsp;</td>
	<td width="15%" bgcolor="#FFFFFF"><div align="right" class="style10">&nbsp;</div></td>
    <td width="36%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
  </tr>
  <tr>
    <td width="21%" bgcolor="#FFFFFF"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Judul Romaji </strong></span></td>
    <td width="28%" bgcolor="#FFFFFF"><span class="style10">Ore Monogatari </span></td>
	<td width="15%" bgcolor="#FFFFFF"><div align="right" class="style5"><strong>Translator</strong></div></td>
    <td width="36%" bgcolor="#FFFFFF"><span class="style5">&nbsp;&nbsp;&nbsp;&nbsp;titidus</span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="style5"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Judul Indonesia</strong></span></td>
    <td bgcolor="#FFFFFF">Kisah Cintaku </td>
	<td bgcolor="#FFFFFF"><div align="right" class="style5"><strong>Timer</strong></div></td>
    <td bgcolor="#FFFFFF"><span class="style5">&nbsp;&nbsp;&nbsp; HSedit</span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="style5"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Tayang (Lokal)</strong></span></td>
    <td bgcolor="#FFFFFF"><span class="style5">Kamis - 02.00 WIB </span></td>
	<td bgcolor="#FFFFFF"><div align="right" class="style5"><strong>Editor</strong></div></td>
    <td bgcolor="#FFFFFF"><span class="style5">&nbsp;&nbsp;&nbsp;&nbsp;rakaosd</span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="style5"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Episode</strong></span></td>
    <td bgcolor="#FFFFFF"><span class="style5">24 </span></td>
	<td bgcolor="#FFFFFF"><div align="right" class="style5"><strong>Typesetter</strong></div></td>
    <td bgcolor="#FFFFFF"><span class="style5">&nbsp;&nbsp;&nbsp;&nbsp;commieosd</span></td>
  </tr>
   <tr>
    <td width="" bgcolor="#FFFFFF"><span class="style5">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Kanal </strong></span></td>
    <td width="" bgcolor="#FFFFFF"><span class="style10"><span class="style5">Crunchyroll</span></span></td>
	<td width="" bgcolor="#FFFFFF"><div align="right" class="style10"><strong>Encoder</strong></div></td>
    <td width="" bgcolor="#FFFFFF"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;Berpergian</span></td>
  </tr>
   <tr>
    <td width="21%" bgcolor="#FFFFFF"><span class="style7">&nbsp;</span></td>
    <td width="28%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
	<td width="15%" bgcolor="#FFFFFF"><div align="right" class="style10">&nbsp;</div></td>
    <td width="36%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
  </tr>
  <tr>
    <td width="21%" bgcolor="#FFFFFF"><span class="style7">&nbsp;</span></td>
    <td width="28%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
	<td width="15%" bgcolor="#FFFFFF"><div align="right" class="style10">&nbsp;</div></td>
    <td width="36%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
  </tr>
  <tr>
    <td width="21%" bgcolor="#FFFFFF"><span class="style7">&nbsp;</span></td>
    <td width="28%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
	<td width="15%" bgcolor="#FFFFFF"><div align="right" class="style10">&nbsp;</div></td>
    <td width="36%" bgcolor="#FFFFFF"><span class="style10">&nbsp;</span></td>
  </tr>
</table><br><br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://wagnaria-kn.zz.mu/">Kembali</a> | <a href="http://www.kentutneraka.org/search/label/Ore Monogatari!!">Rilisan di sini</a>
                    </div>
        </div>
        
    </body>
    <script type="text/javascript">
        function muatDaftarData(){
            if (localStorage.daftar_data_ore && localStorage.id_data_ore){
            
                daftar_data_ore = JSON.parse(localStorage.getItem('daftar_data_ore'));
               
                var data_app = "";
                
                if (daftar_data_ore.length > 0){
                    data_app = '<table class="table">';
                    data_app += '<thead>'+
                                        '<th>eps</th>'+
                                        '<th>translator</th>'+
                          	            '<th>timer</th>'+
										'<th>editor</th>'+
										'<th>typesetter</th>'+
										'<th>encoder</th>'+
                                       
                                        '<th>&nbsp;</th>'+
                                      '</thead><tbody>';
                                      
                    for (i in daftar_data_ore){
                        data_app += '<tr>';
                        data_app += '<td>'+ daftar_data_ore[i].id_data_ore + ' </td>'+
                                          '<td>'+ daftar_data_ore[i].translator + ' </td>'+
                                          '<td>'+ daftar_data_ore[i].timer + ' </td>'+
										  '<td>'+ daftar_data_ore[i].editor + ' </td>'+
										  '<td>'+ daftar_data_ore[i].typesetter + ' </td>'+
										  '<td>'+ daftar_data_ore[i].encoder + ' </td>'+
                                         
                                          '<td><a class="btn btn-warning btn-small" href="javascript:void(0)" onclick="editData(\''+daftar_data_ore[i].id_data_ore+'\')">Edit</a></td>';
                        data_app += '</tr>';
                        
                    }
                   data_app += '</tbody></table>';
               
                }
                else {
                    data_app = "Tidak ada data...";
                }
               
                
               $('#list-data').html(data_app);
               $('#list-data').hide();
               $('#list-data').fadeIn(100);
            }
        }
		
		function editData(id){
		
            if (localStorage.daftar_data_ore && localStorage.id_data_ore){
                daftar_data_ore = JSON.parse(localStorage.getItem('daftar_data_ore'));			
				idx_data = 0;
                for (i in daftar_data_ore){
                    if (daftar_data_ore[i].id_data_ore == id){
						$("#eid_data_ore").val(daftar_data_ore[i].id_data_ore);
						$("#etranslator").val(daftar_data_ore[i].translator);
						$("#etimer").val(daftar_data_ore[i].timer);
						$("#eeditor").val(daftar_data_ore[i].editor);
						$("#etypesetter").val(daftar_data_ore[i].typesetter);
					    $("#eencoder").val(daftar_data_ore[i].encoder);
						daftar_data_ore.splice(idx_data, 1);
                    }
                    idx_data ++;
                }
				gantiMenu('edit-data');
				
            }
			
		}
        
        
        function simpanData(){
            translator = $('#translator').val();
            timer = $('#timer').val();
            editor = $('#editor').val();
			typesetter = $('#typesetter').val();
			encoder = $('#encoder').val();
            
            if (localStorage.daftar_data_ore && localStorage.id_data_ore){
                daftar_data_ore = JSON.parse(localStorage.getItem('daftar_data_ore'));
                id_data_ore = parseInt(localStorage.getItem('id_data_ore'));
            }
            else {
                daftar_data_ore = [];
                id_data_ore = 0;
            }

            id_data_ore ++;
            daftar_data_ore.push({'id_data_ore':id_data_ore, 'translator':translator, 'timer':timer, 'editor':editor, 'typesetter':typesetter, 'encoder':encoder});
            localStorage.setItem('daftar_data_ore', JSON.stringify(daftar_data_ore));
            localStorage.setItem('id_data_ore', id_data_ore);
            document.getElementById('form-data').reset();
            gantiMenu('list-data');
            
            return false;
        }
		
        function simpanEditData(){
            id_data_ore = $('#eid_data_ore').val();
            translator = $('#etranslator').val();
            timer = $('#etimer').val();
            editor = $('#eeditor').val();
			typesetter = $('#etypesetter').val();
			encoder = $('#eencoder').val();
            
            daftar_data_ore.push({'id_data_ore':id_data_ore, 'translator':translator, 'timer':timer, 'editor':editor, 'typesetter':typesetter, 'encoder':encoder});
            localStorage.setItem('daftar_data_ore', JSON.stringify(daftar_data_ore));
            document.getElementById('eform-data').reset();
            gantiMenu('list-data');
            
            return false;
        }
        
        function hapusData(id){
            if (localStorage.daftar_data_ore && localStorage.id_data_ore){
                daftar_data_ore = JSON.parse(localStorage.getItem('daftar_data_ore'));
                
                idx_data = 0;
                for (i in daftar_data_ore){
                    if (daftar_data_ore[i].id_data_ore == id){
                        daftar_data_ore.splice(idx_data, 1);
                    }
                    idx_data ++;
                }
               
                localStorage.setItem('daftar_data_ore', JSON.stringify(daftar_data_ore));
                muatDaftarData();
            }
        }
		

        function gantiMenu(menu){
            if (menu == "list-data"){
                muatDaftarData();
                $('#tambah-data').hide();
                $('#list-data').fadeIn();
				$('#edit-data').hide();
				$('#info').hide();
            }
            else if (menu == "tambah-data"){
                $('#tambah-data').fadeIn();
                $('#list-data').hide();
				$('#edit-data').hide();
				$('#info').hide();
            }
			else if (menu == "edit-data"){
                $('#edit-data').fadeIn();
                $('#tambah-data').hide();
                $('#list-data').hide();
				$('#info').hide();
			}
			else if (menu == "info"){
                $('#edit-data').hide();
                $('#tambah-data').hide();
                $('#list-data').hide();
				$('#info').fadeIn();
            }
        }
    </script>
</html>

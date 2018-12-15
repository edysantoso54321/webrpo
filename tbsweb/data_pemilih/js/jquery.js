	function perlihatkan(){
		$('#tombolutama').hide();
		$('#menu').hide();
		$('#form').show(1000);
	};

	function sembunyikan(){
		$('#form').hide();
		$('#edit').hide();
		$('#add').hide();
		$('#tombolutama').show(1000);
		$('#menu').show(1000);
	};

	function reset(){
		$('input[name=noktp]').val('');
		$('input[name=nama]').val('');
		$('input[name=tgl]').val('');
		$('input[name=status]').val('');
		$('input[name=alamat]').val('');
		noktp='';
		nama='';
		tgl='';
		jk='';
		status='';
		alamat='';
	};

$(document).ready(function() {
	$('#sukses').hide();
	$('#gagal').hide();
	$('#add').hide();
	$('#edit').hide();
	$('#form').hide();
	var noktp;
	var nama;
	var tgl;
	var jk;
	var status;
	var alamat;
	var table=$('#data').DataTable();
	
//pengambilan data dari table
	$('#data tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	} );


//penghapusan data dari tabel yang telah di select
	$('#_hapus').click( function () {
		if ( table.$('tr.selected').hasClass('selected') ) {
			var jaya=table.$('tr.selected').attr('noktp');
			$.post('http://localhost/tbsweb/data/delete/'+jaya);
			table.row('.selected').remove().draw( false );
			jaya='';
		}else{
			alert('please select data wich you want to delete!');
		}
	} );

//penyimpanan data dari form ke tabledata
	$('#submit').click( function (event) {
		event.preventDefault();
		noktp = $('input[name=noktp]').val();
		nama = $('input[name=nama]').val();
		tgl = $('input[name=tgl]').val();
		jk = $("input[name=jk]:checked").val();
		status = $('input[name=status]').val();
		alamat = $('input[name=alamat]').val();
		if ((noktp!='')&&(nama!='')&&(tgl!='')&&(jk!='')&&(alamat!='')&&(status!='')){
			table.row.add( [
				noktp,nama,tgl,jk,status,alamat
			] ).draw( false );
			$.post('http://localhost/tbsweb/data/insert/'+noktp+'/'+nama+'/'+tgl+'/'+jk+'/'+status+'/'+alamat+'/');
			reset();
			$('#sukses').show(1000).delay(1000).hide(1000);			
		}else{
			$('#gagal').show(1000).delay(1000).hide(1000);
		}
	} );

//menampilkan form tambah data
	$('#_tambah').click(function(){
		perlihatkan();
		$('#add').show(1000);
	});


//edit menghapus data dan menambah data
	$('#_edit').click(function(){
		if ( table.$('tr.selected').hasClass('selected') ) {
			var jaya=table.$('tr.selected').attr('noktp');
			perlihatkan();
			reset();
			$('#edit').show(1000);
			$('#submit').click(function(){
				if ((noktp!='')&&(nama!='')&&(tgl!='')&&(jk!='')&&(alamat!='')&&(status!='')){
					table.row('.selected').remove().draw( false );
					$.post('http://localhost/tbsweb/data/delete/'+jaya);
					jaya='';
				}
				sembunyikan();
			});
		}
		else{
			alert('please select data wich you want to edit!');
		}
	});

	$('.batal').click(function(){
		sembunyikan();
	});

} );

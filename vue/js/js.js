console.log("saluuut");
$(document).ready(function(){
  var form = $('#form'), titre = $('.titre'), auteur = $('.auteur'), description = $('.description');
  var checkAll =$('#checkAll'), del=$('.del'), deleteForm = $('#deleteForm');
  var liste = $('#liste').offset();
	


  var add=$('#add');
  $(add).on('click', function () {
    $(this).fadeOut();
    $(form).fadeIn("slow");
  })
  //chercher un livres
  $('#search').on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#myTable tbody tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);

    })
  });

  //tout selectioner
  $(checkAll).on('click',function () {
    if (this.checked) {
      $(del).each(function () {
        this.checked = true;
      })
    }else {
      $(del).each(function () {
        this.checked = false;
      })
    }
  });

  //supprimer des livres
  $(deleteForm).on('submit',function (e) {
    e.preventDefault();
    $('html, body').animate({
      'scrollTop': $("#liste").offset().top
    }, 1000, 'swing')
    $('.alert').remove();
    var data = $(this).serialize();
    url = $(this).attr('action');
    $.ajax({
      type:'post',
      url:url,
      data:data,
      dataType:'json',
      success:function (response) {
        if (response.success) {
          $('input:checked').parent().parent().fadeOut();
          $(deleteForm).before('<div class="alert alert-danger alert-dismissable">'+response.message+'</div>');

          $(".alert").fadeOut(4000);
        }
      }
    })
  })


  //modifier titre
  $(titre).each(function () {
    $(this).on('click',function () {
      $(this).attr('contenteditable', true);
    });
    $(this).on('blur',function () {
      $(this).removeAttr('contenteditable');
      var titre = $(this).text();
      id = $(this).closest('tr').attr('id');
      $.ajax({
        type:'post',
        url:'update.php',
        data:{id:id, titre:titre},
        dataType:'json',
        success:function (response) {
          if(response.success){
            console.log('modifier');
          }
        }
      })
    })
  })

  //modifier auteur
  $(auteur).each(function () {
    $(this).on('click',function () {
      $(this).attr('contenteditable', true);
    });
    $(this).on('blur',function () {
      $(this).removeAttr('contenteditable');
      var auteur = $(this).text();
      id = $(this).closest('tr').attr('id');
      $.ajax({
        type:'post',
        url:'update.php',
        data:{id:id, auteur:auteur},
        dataType:'json',
        success:function (response) {
          if(response.success){
            console.log('mokh');
          }
        }
      })
    })
  })

  // modifier description
  $(description).each(function () {
    $(this).on('click',function () {
      $(this).attr('contenteditable', true);
    });
    $(this).on('blur',function () {
      $(this).removeAttr('contenteditable');
      var description = $(this).text();
      id = $(this).closest('tr').attr('id');
      $.ajax({
        type:'post',
        url:'update.php',
        data:{id:id, description:description},
        dataType:'json',
        success:function (response) {
          if(response.success){
            console.log('modifier');
          }
        }
      })
    })
  })
//ajouter livre
  $(form).on('submit',function (e) {
    e.preventDefault();
    $('.alert').remove();
    $(form).fadeOut();
    $(add).fadeIn();
    var data = new FormData(this);
    url = $(this).attr('action');
    $.ajax({
      type:'post',
      url:url,
      processData: false,
      contentType: false,
      data:data,
      dataType:'json',
      success:function(response){
        $('tbody').prepend('<tr id="'+response.id+'"><td> <img src="img/'+response.image+'" height="220px" width="180px"></td><td class="titre"> <h4>'
        +response.titre+' </h4></td><td class="auteur">'
        +response.auteur+'</h4></td><td class="description"> <p>'
        +response.description+'<p></td><td><input type="checkbox" id="'
        +response.id+'" class="del" name="livres[]" value="'
        +response.id+'"></td></tr>');
        $('#form .form-control').val('');
      }
    })
  })
})

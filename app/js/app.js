var app = {
  init: function() {
    app.getPosts();
  },

  getPosts: function() {
    var rootURL = "http://localhost/bogota_gastro/wp-json/wp/v2";

    $.ajax({
      type: "GET",
      url: rootURL + "/viaje",
      dataType: "json",
      success: function(data) {
        $.each(data, function(index, value) {
          // ver los valores del objeto
          // alert(JSON.stringify(value));
          // console.log(value.featured_image);
          $("ul.topcoat-list").append(
            '<li class="topcoat-list__item">' +
              // '<img src="' +
              // value.featured_image.attachment_meta.sizes.medium.url +
              // '" /><br>' +
              "<h3>" +
              // value.title +
              value.title.rendered +
              "</h3>" +
              "<p>" +
              // value.excerpt +
              value.content.rendered +
              "</p>" +
              "<p><strong>Destino: </strong>" +
              // value.excerpt +
              value.destino +
              "</p>" +
              "<p><strong>Vacunas obligatorias: </strong>" +
              // value.excerpt +
              value.vacunas_obligatorias +
              "</p>" +
              "<p><strong>Vacunas recomendadas: </strong>" +
              // value.excerpt +
              value.vacunas_recomendadas +
              "</p>" +
              "<p><strong>Transporte local: </strong>" +
              // value.excerpt +
              value.transporte_local +
              "</p>" +
              "<p><strong>Peligrosidad: </strong>" +
              // value.excerpt +
              value.peligrosidad +
              "</p>" +
              "<p><strong>Moneda local: </strong>" +
              // value.excerpt +
              value.moneda_local +
              "</p></li > "
          );
        });
      },
      error: function(error) {
        console.log(error);
      }
    });
  }
};

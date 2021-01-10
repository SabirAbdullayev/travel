function PortfolioStatus(id) {
    $.ajax({
    url: "../settings/code/portfolio-ajax.php",
        data: {Status: true, id:id},
        method: "POST",

        success: function (data){
            if (data=="ok"){
                swal("Əla!", "Əməliyyat uğurla icra edildi!", "success");
            }
            else {
                swal("Təəssüf!", "İcra edilmədi!", "error");
            }
        },
        error: function (x, sts){
        console.log("Error...");
        },
        });
}

function BlogStatus(id) {
    $.ajax({
        url: "../settings/code/blog-ajax.php",
        data: {Status: true, id:id},
        method: "POST",

        success: function (data){
            if (data=="ok"){
                swal("Əla!", "Əməliyyat uğurla icra edildi!", "success");
            }
            else {
                swal("Təəssüf!", "İcra edilmədi!", "error");
            }
        },
        error: function (x, sts){
            console.log("Error...");
        },
    });
}



function BlogView(id) {
    $.ajax({
        url: "../settings/code/blog-ajax.php",
        data: {BlogView: true, id:id},
        method: "POST",

        success: function (data){
            let newdata = JSON.parse(data);
            let tags = JSON.parse(newdata.tags);
            let tagsdata = "";
            document.getElementById("img").innerHTML = `<img src="../../${newdata.sekil}" width="75" height="50" />`
            document.getElementById("title").innerHTML = newdata.basliq;
            document.getElementById("context").innerHTML = newdata.mezmun;
            document.getElementById("readcount").innerHTML = newdata.oxunmasayi;

            for (let i in tags){
                tagsdata += `<span class="badge badge-info mr-1" >${tags[i]}</span>`;
            }
            document.getElementById("tags").innerHTML = tagsdata;
            },
        error: function (x, sts){
            console.log("Error...");
        },
    });
}


function PortfolioSil(id,img) {

    swal({
        title: "Xəbərdarlıq",
        text: "İnformasiyanın silinməsindən əminsinizmi?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr", "Bəli"],
    })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "../settings/code/portfolio-ajax.php",
                    data: { Sil: true, id:id, img:img},
                    method: "POST",

                    success: function (data) {
                        console.log(data);
                        if(data=="ok"){
                            location.reload();
                        }
                    },

                    error: function (x, sts) {
                        console.log("Error...");

                    },

                });

            } else {
                swal("İmtina edildi!");
            }

        });
}



function BlogSil(id,img) {

    swal({
        title: "Xəbərdarlıq",
        text: "İnformasiyanın silinməsindən əminsinizmi?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr", "Bəli"],
    })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "../settings/code/blog-ajax.php",
                    data: { Sil: true, id:id, img:img},
                    method: "POST",

                    success: function (data) {
                        console.log(data);
                        if(data=="ok"){
                            location.reload();

                        }
                    },

                    error: function (x, sts) {
                        console.log("Error...");

                    },

                });

            } else {
                swal("İmtina edildi!");
            }

        });
}


function service_Sil(id,img,icon) {

    swal({
        title: "Xəbərdarlıq",
        text: "İnformasiyanın silinməsindən əminsinizmi?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr", "Bəli"],
    })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "../settings/code/services-ajax.php",
                    data: { Sil: true, id:id, img:img, icon:icon},
                    method: "POST",

                    success: function (data) {
                        console.log(data);
                        if(data=="ok"){
                            location.reload();
                        }
                    },

                    error: function (x, sts) {
                        console.log("Error...");

                    },

                });

            } else {
                swal("İmtina edildi!");
            }

        });
}





function PortfolioRedakte(id){
    $.ajax({
        url: "../settings/code/portfolio-ajax.php",
        data: { Edit: true, id:id},
        method: "POST",

        success: function (data) {
            data = JSON.parse(data);
            let kateqoriyalar = ["Web Layihələr","SEO","Mobil Layihələr"];
            document.getElementById("redakteid").value = data.id;
            document.getElementById("oldimg").value = "../../"+data.sekil;
            document.getElementById("redakteadi").value = data.adi;
            document.getElementById("redakteinfo").value = data.info;
            document.getElementById("redaktelink").value = data.link;
            document.getElementById("redaktesekil").src = "../../"+data.sekil;
            let slc = "";
            for (let i = 0; i<kateqoriyalar.length;i++){
                slc += `<option ${kateqoriyalar[i]==data.kateqoriya ? "selected" : "" } >${kateqoriyalar[i]}</option>` ;
            }
            document.getElementById("redaktekateqoriya").innerHTML = slc;
        },

        error: function (x, sts) {
            console.log("Error...");
        },
    });
}

function service_edit(id){
    $.ajax({
        url: "../settings/code/services-ajax.php",
        data: { Edit: true, id:id},
        method: "POST",

        success: function (data) {
            data = JSON.parse(data);
            document.getElementById("redakteid").value = data.id;
            document.getElementById("oldimg").value = "../../"+data.sekil;
            document.getElementById("redakteadi").value = data.adi;
            document.getElementById("redakteinfo").value = data.info;
            document.getElementById("redaktelink").value = data.link;
            document.getElementById("redaktesekil").src = "../../"+data.sekil;

        },

        error: function (x, sts) {
            console.log("Error...");
        },
    });
}



function UrlParam() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get("status");
}

function Status(){
    if(UrlParam("status")=="ok"){
        swal("Əla!", "Əməliyyat uğurla icra edildi!", "success");
    }
    if(UrlParam("status")=="no"){
        swal("Təəssüf!", "Əməliyyat icra edilmədi!", "error");
    }
    if(UrlParam()!=null){
        setTimeout(Yonlendir,2000);
    }
}

function Yonlendir(){
    location.href = location.protocol + '//' + location.host + location.pathname;
}
onload = function(){
    Status();
}
onload = function(){
    Status();
}

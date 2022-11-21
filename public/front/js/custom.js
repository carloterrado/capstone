$(function(){

    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    function  ChangeUrl(title, url) {  
        if (typeof(history.replaceState) != "undefined") {  
           
            var obj = { Title: title, Url: url };  
            history.replaceState( obj,obj.Title, obj.Url); 
            document.title = title; 
        } else {  
            alert("error loading the requested URL");  
        }  
    }  

    async function  getPage(url){
        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        await  $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "GET",
            url: "/"+ url,
            data: { CSRF_TOKEN },
            success: function (data) {   
                $('.main-content').html(data)  
            },
            error: function (error) {
             console.log(error)
            },
        });
    }


    $('.home').on('click',  function()
    {
        let url = 'partial-content/home';
        ChangeUrl('Chesca Chen\'s Car Rental', '/'); 
        getPage(url);   
    })
    $('.cars').on('click',  function()
    {
        let url = 'partial-content/cars';
        ChangeUrl('Cars', '/cars'); 
        getPage(url);   
    })
    $('.about').on('click', function()
    {
        let url = 'partial-content/about';
        ChangeUrl('About Us', 'about');
        getPage(url);  
    })
    $('.contact').on('click',  function()
    {
        let url = 'partial-content/contact';
        ChangeUrl('Contact Us', '/contact'); 
        getPage(url);   
    })  
   
});

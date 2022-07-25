<a href="#" id="back-btn" class="text-decoration-none position-absolute top-0 end-0 me-4 mt-2"> 
    <h1 class="text-white">
        &larr;
    </h1>  
</a>
<script>
    let backBtn = document.getElementById("back-btn")

    backBtn.addEventListener("click",function(evt){
        evt.preventDefault();
        window.history.back()
    })
</script>
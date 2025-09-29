function calculateVol(){
    let radius = $('#radius').val();
    let height = $('#height').val();
    let volume = ((1/3) * (3.14159) * ((radius * radius) * (height)));
    $('#volume').html(volume);
        
}

function calculateSH(){
    let radius = $('#radius').val();
    let height = $('#height').val();

    let slantheight = (Math.sqrt((radius * radius) + (height * height)));
    $('#slantheight').html(slantheight);

}

function calculateSA(){
    let radius = $('#radius').val();
    let height = $('#height').val();

    let surfacea = (((3.1159) * (radius)) * (radius + ((Math.sqrt((radius * radius) + (height * height))))));
    $('#surfacea').html(surfacea);
}
function fb(app_id) { 
    var link = 'https://www.facebook.com/sharer/sharer.php?app_id=' + app_id + '&sdk=joey&u=' + encodeURIComponent(window.location.href) + '&display=popup&ref=plugin&src=share_button';
    window.open(link, 'trueplookpanya', 'left=10,top=10,width=500,height=500,toolbar=1,resizable=0');
}
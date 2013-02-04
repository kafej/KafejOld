///////////////////////////////////////////////////////\\
///////////////////////////////////////////////////////\\
//***************************************************\\\\
//*                Right Click v1.0                  *\\\
//*                 ExpBuilder.com                   *\\\
//*               elkadrey@gmail.com                 *\\\
//*             Auther: Ahmed Elkadrey               *\\\
//***************************************************\\\\
///////////////////////////////////////////////////////\\
///////////////////////////////////////////////////////\\


jQuery.fn.rclick = function(targetMenu)
{
    var me = this;
    $(targetMenu).addClass('rightclick');
    $(this).bind('contextmenu', function(e)
    {
        if(e.button == 2 || e.button == 3)
        {
            $(targetMenu).css({'top':e.pageY - 5, 'left':e.pageX - 5}).show().mouseleave(function()
            {
                $(this).hide();
                $(me).find('td').css({'background-color':'transparent', 'color':''});
            }).click(function()
            {
                $(this).hide();
                $(me).find('td').css({'background-color':'transparent', 'color':''});
            });
            $(me).find('td').css({'background-color':'#330000', 'color':'#fff'});
            return false;
        }
    });
    $(".rightclick").mouseleave(function()
    {
        $(this).hide();
    });
}
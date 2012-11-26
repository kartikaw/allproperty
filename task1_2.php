<?

if($_POST['vs']!=''&&$_POST['ve']!='')
{
    $vstart = intval($_POST['vs']);
    $vend = intval($_POST['ve']);
}

pout($vstart, $vend); 

function pout($vstart, $vend)
{
    if( is_int($vstart) && is_int($vend) )
    {
    
        $i = $vstart;
        while($i<=$vend)
        {   
            $prevone = $i-1;
            $prevtwo = $i-2;
            
            //check prev int is valid??
            if($prevone>=$vstart && $prevtwo>=$vstart)
            {
                $j=0;$k=0;
                //check for Bazz condition
                if(multiple($prevone)=='Fizz' || multiple($prevone)=='Buzz')
                {
                    $j = 1;   
                }
                if(multiple($prevtwo)=='Fizz' || multiple($prevtwo)=='Buzz')
                {
                    $k = 1;       
                }
               
                if($j==1 && $k==1)
                {
                    echo ' Bazz'; 
                }
                else
                {
                    echo multiple($i);
                }
            }
            else
            {
                echo multiple($i);
            }
            $i++;
            
        }    
    }
    else
    {
        echo 'Must be integer';
        return false;
    }
}

/*function to get a Fizz, Buzz or number */
function multiple($value)
{

    $res = '';
    if(fmod($value,3)==0)
    {
        $res = 'Fizz';
    } 
    if(fmod($value,5)==0)
    {
        $res = 'Buzz';
    }
     
    if($res=='')
    {
        $res = ' '.$value.' ';
    } 
  
    return $res;
}


?>

<form name="frm" action="task1_2.php" method="post">
Start: <input type="text" value='<?=$vstart;?>' name="vs" /><br />
End: <input type="text" value='<?=$vend;?>' name="ve" /><br />
<input type="submit" value="submit" name="Submit" />
</form>


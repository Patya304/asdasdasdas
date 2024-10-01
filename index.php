<!DOCTYPE html>
<html>

  <body>


    <style>

	h1
	{
		text-align		: center	;
		color			: #448		;
	}

	table
	{
		margin			: 24px auto	;
		border			: solid 1px #88C;
	}

	td
	{
		text-align		: center	;
		background-color	: #BBD		;
		color			: #224
	}

	tr:first-child td , tr:last-child td
	{
		background-color	: #88C		;
		font-weight		: bold		;
	}

	td:nth-child(3)
	{
		font-weight		: bold		;
	}

    </style>


    <h1>Összegző</h1>

    <table width=240>

	<tr>

		<td>   N  </td>
		<td>   Σ N    </td>

	</tr>

    <?php


        if( isset($_GET['i'])) $k = @($_GET['i']);
        else $k= 1;
        if( isset($_GET['j'])) $v = @($_GET['j']);
        else $v= 10;
/*
        if( !isset( $_GET['i'] ))
        {
            die( "
                Használd az oldalt ügyesen!<br><br>
                <a href='./?i=50'>index.php?i=50</a>
        
            " ) ;
        }
*/
        if( $k == 0 )		die("Az 'i' nem lehet 0!");
        if( $j <= $v )      die("A  'j' nem lehet kisebb vagy egyenlő az 'i'-vel!");

        $n = 0;
        for($i = $k; $i<=$v; $i++)
        {
        $n += $i;
        print "
            <tr>

                <td>                       $i       </td>
                <td>                       $n       </td>

            </tr>
        " ;

        }

    ?>

	<tr>

		<td>   N  </td>
		<td>   Σ N    </td>

	</tr>

    </table>

  </body>

</html>


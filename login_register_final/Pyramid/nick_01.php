<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for($nick=1;$nick<=4;$nick++)
            {
                for($suriya=1;$suriya<=$nick;$suriya++)
                {
                    echo " ";
                }
                echo $nick ,$nick;
                for($suriya=3;$suriya>=$nick;$suriya--)
                {
                    echo "**";
                }
                echo $nick ,$nick;
                echo "<br/>";               
            }
        ?>
    </pre>
</body>

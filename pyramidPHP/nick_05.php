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
            for ($nick=1; $nick <= 4; $nick++)
            {
             
                 for ($suriya=4; $suriya >= $nick; $suriya--)
                {
                    echo " ";
                }
                    echo $nick;
                 for ($suriya=2; $suriya <= $nick; $suriya++)
                {
                    echo "**";
                }
                    echo $nick;
            
            echo "\n";
            }
            
             for ($nick=2; $nick <= 4; $nick++)
            {
             
                 for ($suriya=1; $suriya <= $nick; $suriya++)
                {
                    echo " ";
                }
                    echo 5-$nick;
                 for ($suriya=3; $suriya >= $nick; $suriya--)
                {
                    echo "**";
                }
                    echo 5-$nick;
            
            echo "\n";
            }
        ?>
    </pre>
</body>

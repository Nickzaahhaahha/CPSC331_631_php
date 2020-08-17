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
            for ($nick=1; $nick <= 7; $nick++)
            {
                 for ($suriya=1; $suriya <= $nick; $suriya++)
                {
                    echo (" ");
                }
                for ($suriya=6; $suriya >= $nick; $suriya--)
                {
                    echo (($suriya-1)%2);
                }
                echo (($nick)%2);
                
                for ($suriya=$nick; $suriya <= 6; $suriya++)
                {
                    echo (($suriya-1)%2);
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>

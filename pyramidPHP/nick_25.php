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
            for ($nick=1; $nick <= 5; $nick++)
            {
                for ($suriya=4; $suriya >= $nick; $suriya--)
                {
                    echo ("*");
                }
                for ($suriya=1; $suriya <= $nick; $suriya++)
                {
                    echo (6-$nick);
                }
                for ($suriya=2; $suriya <= $nick; $suriya++)
                {
                    echo (6-$nick);
                }
                for ($suriya=5; $suriya >= $nick; $suriya--)
                {
                    echo ("*");
                } 
            echo ("\n");
            }
        ?>
    </pre>
</body>
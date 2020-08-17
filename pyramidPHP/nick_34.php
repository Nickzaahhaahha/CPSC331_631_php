<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($nick=1; $nick <= 3; $nick++)
            {
                for ($suriya=3; $suriya >= $nick; $suriya--)
                {
                    echo (" ");
                }
                echo ("*");
                for ($suriya=1; $suriya <= $nick; $suriya++)
                {
                    echo ($nick);
                }
                for ($suriya=2; $suriya <= $nick; $suriya++)
                {
                    echo ($nick);
                }
                echo ("*");
                
            echo ("\n");
            }
            for ($nick=1; $nick <= 2; $nick++)
            {
                for ($suriya=1; $suriya <= $nick+1; $suriya++)
                {
                    echo (" ");
                }
                echo ("*");
                for ($suriya=$nick; $suriya <= 2; $suriya++)
                {
                    echo (3-$nick);
                }
                for ($suriya=$nick; $suriya <= 1; $suriya++)
                {
                    echo (3-$nick);
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>
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
                echo ("*");
                for ($suriya=2; $suriya <= $nick; $suriya++)
                {
                    echo (" ");
                }
                for ($suriya=$nick; $suriya <= 5; $suriya++)
                {
                    echo ($nick);
                }
                for ($suriya=$nick; $suriya <= 4; $suriya++)
                {
                    echo ($nick);
                }
                for ($suriya=2; $suriya <= $nick; $suriya++)
                {
                    echo (" ");
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>
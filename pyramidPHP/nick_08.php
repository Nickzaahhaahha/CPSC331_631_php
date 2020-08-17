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
                for ($suriya=0; $suriya < 3; $suriya++)
                {
                    echo ($suriya+$nick);
                }
                for ($suriya=0; $suriya <= $nick; $suriya++)
                {
                    echo ("*");
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>

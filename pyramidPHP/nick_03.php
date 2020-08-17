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
             echo$nick,$nick+4;
                 for ($suriya=1; $suriya <= $nick+4; $suriya++)
                {
                    echo "*";
                }
            echo "\n";
            }
        ?>
    </pre>
</body>

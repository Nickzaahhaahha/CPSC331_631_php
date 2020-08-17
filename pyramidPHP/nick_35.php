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
                echo ($nick);
                echo ("*");
                echo (($nick*2)-1);
                echo ("*");
                echo ($nick*2) ; 
                echo ("\n");
            }
        ?>
    </pre>
</body>
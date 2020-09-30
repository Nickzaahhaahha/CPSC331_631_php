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
            for ($nick=1; $nick <= 3; $nick++)
            {
                for ($suriya=$nick; $suriya <= 3; $suriya++)
                {
                   echo ($suriya);
                }
                for ($suriya=1; $suriya <= $nick; $suriya++)
                {
                   echo ("*");
                }
                for ($suriya=2; $suriya <= $nick; $suriya++)
                {
                   echo ("*");
                }
                for ($suriya=3; $suriya >= $nick; $suriya--)
                {
                   echo ($suriya);
                }
                
           echo ("\n");
            }
            for ($nick=2; $nick <= 3; $nick++)
            {
                for ($suriya=1; $suriya <= $nick; $suriya++)
                {
                   echo (4-(4-$suriya));
                }
                for ($suriya=$nick; $suriya <= 3; $suriya++)
                {
                   echo ("*");
                }
                for ($suriya=$nick; $suriya <= 2; $suriya++)
                {
                   echo ("*");
                }
                for ($suriya=1; $suriya <= $nick; $suriya++)
                {
                   echo (4-$suriya);
                }
           echo ("\n");
            }
        ?>
    </pre>
</body>
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
            for ($nick=1; $nick <= 4; $nick++){
                for ($suriya=$nick; $suriya <= $nick+2; $suriya++){
                echo $suriya;
               }
               for ($suriya=1; $suriya <= ($nick + 2); $suriya++){
                echo "*";
               }
               echo "<br/>";
               }
        ?>
    </pre>
</body>

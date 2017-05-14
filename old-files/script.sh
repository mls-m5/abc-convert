

%abcm2ps files/test.abc -O files/

%ps:- and png:- specifies file format and that stdin or stdout should be used
# abcm2ps files/test.abc -O- | convert ps:- -trim files/out.png
abcm2ps test.abc -O- | convert ps:- -trim png:-



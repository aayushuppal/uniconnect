<?php

/* plupload.html */
class __TwigTemplate_79b52ae06c4a126dd06614eb086883ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
//<![CDATA[
phpbb.plupload = {
\ti18n: {
\t\t'b': '";
        // line 5
        echo addslashes($this->env->getExtension('phpbb')->lang("BYTES_SHORT"));
        echo "',
\t\t'kb': '";
        // line 6
        echo addslashes($this->env->getExtension('phpbb')->lang("KB"));
        echo "',
\t\t'mb': '";
        // line 7
        echo addslashes($this->env->getExtension('phpbb')->lang("MB"));
        echo "',
\t\t'gb': '";
        // line 8
        echo addslashes($this->env->getExtension('phpbb')->lang("GB"));
        echo "',
\t\t'tb': '";
        // line 9
        echo addslashes($this->env->getExtension('phpbb')->lang("TB"));
        echo "',
\t\t'Add Files': '";
        // line 10
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES"));
        echo "',
\t\t'Add files to the upload queue and click the start button.': '";
        // line 11
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES_TO_QUEUE"));
        echo "',
\t\t'Close': '";
        // line 12
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_CLOSE"));
        echo "',
\t\t'Drag files here.': '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_DRAG"));
        echo "',
\t\t'Duplicate file error.': '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_DUPLICATE_ERROR"));
        echo "',
\t\t'File: %s': '";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE"));
        echo "',
\t\t'File: %s, size: %d, max file size: %d': '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE_DETAILS"));
        echo "',
\t\t'File count error.': '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_COUNT"));
        echo "',
\t\t'File extension error.': '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_EXTENSION_ERROR"));
        echo "',
\t\t'File size error.': '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE_ERROR"));
        echo "',
\t\t'File too large:': '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_TOO_LARGE"));
        echo "',
\t\t'Filename': '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILENAME"));
        echo "',
\t\t'Generic error.': '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_GENERIC_ERROR"));
        echo "',
\t\t'HTTP Error.': '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_HTTP_ERROR"));
        echo "',
\t\t'Image format either wrong or not supported.': '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_IMAGE_FORMAT"));
        echo "',
\t\t'Init error.': '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_INIT_ERROR"));
        echo "',
\t\t'IO error.': '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_IO_ERROR"));
        echo "',
\t\t'Invalid file extension:': '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_INVALID_EXT"));
        echo "',
\t\t'N/A': '";
        // line 28
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_NOT_APPLICABLE"));
        echo "',
\t\t'Runtime ran out of available memory.': '";
        // line 29
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_RUNTIME_MEMORY"));
        echo "',
\t\t'Security error.': '";
        // line 30
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SECURITY_ERROR"));
        echo "',
\t\t'Select files': '";
        // line 31
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SELECT_FILES"));
        echo "',
\t\t'Size': '";
        // line 32
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE"));
        echo "',
\t\t'Start Upload': '";
        // line 33
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_START_UPLOAD"));
        echo "',
\t\t'Start uploading queue': '";
        // line 34
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_START_CURRENT_UPLOAD"));
        echo "',
\t\t'Status': '";
        // line 35
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STATUS"));
        echo "',
\t\t'Stop Upload': '";
        // line 36
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_UPLOAD"));
        echo "',
\t\t'Stop current upload': '";
        // line 37
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_CURRENT_UPLOAD"));
        echo "',
\t\t\"Upload URL might be wrong or doesn't exist.\": '";
        // line 38
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_UPLOAD_URL"));
        echo "',
\t\t'Uploaded %d/%d files': '";
        // line 39
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_UPLOADED"));
        echo "',
\t\t'%d files queued': '";
        // line 40
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILES_QUEUED"));
        echo "',
\t\t'%s already present in the queue.': '";
        // line 41
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ALREADY_QUEUED"));
        echo "'
\t},
\tconfig: {
\t\truntimes: 'html5',
\t\turl: '";
        // line 45
        echo (isset($context["S_PLUPLOAD_URL"]) ? $context["S_PLUPLOAD_URL"] : null);
        echo "',
\t\tmax_file_size: '";
        // line 46
        echo (isset($context["FILESIZE"]) ? $context["FILESIZE"] : null);
        echo "b',
\t\tchunk_size: '";
        // line 47
        echo (isset($context["CHUNK_SIZE"]) ? $context["CHUNK_SIZE"] : null);
        echo "b',
\t\tunique_names: true,
\t\tfilters: [";
        // line 49
        echo (isset($context["FILTERS"]) ? $context["FILTERS"] : null);
        echo "],
\t\t";
        // line 50
        echo (isset($context["S_RESIZE"]) ? $context["S_RESIZE"] : null);
        echo "
\t\theaders: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},
\t\tfile_data_name: 'fileupload',
\t\tmultipart_params: {'add_file': '";
        // line 53
        echo addslashes($this->env->getExtension('phpbb')->lang("ADD_FILE"));
        echo "'},
\t\tform_hook: '#postform',
\t\tbrowse_button: 'add_files',
\t\tdrop_element : 'message',
\t},
\tlang: {
\t\tERROR: '";
        // line 59
        echo addslashes($this->env->getExtension('phpbb')->lang("ERROR"));
        echo "',
\t\tTOO_MANY_ATTACHMENTS: '";
        // line 60
        echo addslashes($this->env->getExtension('phpbb')->lang("TOO_MANY_ATTACHMENTS"));
        echo "',
\t},
\torder: '";
        // line 62
        echo (isset($context["ATTACH_ORDER"]) ? $context["ATTACH_ORDER"] : null);
        echo "',
\tmaxFiles: ";
        // line 63
        echo (isset($context["MAX_ATTACHMENTS"]) ? $context["MAX_ATTACHMENTS"] : null);
        echo ",
\tdata: ";
        // line 64
        echo (isset($context["S_ATTACH_DATA"]) ? $context["S_ATTACH_DATA"] : null);
        echo ",
}
//]]>
</script>
";
        // line 68
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/plupload/plupload.full.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 69
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/plupload.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
    }

    public function getTemplateName()
    {
        return "plupload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 68,  225 => 64,  221 => 63,  217 => 62,  212 => 60,  184 => 47,  180 => 46,  161 => 39,  157 => 38,  153 => 37,  145 => 35,  137 => 33,  133 => 32,  129 => 31,  117 => 28,  105 => 25,  93 => 22,  89 => 21,  85 => 20,  77 => 18,  61 => 14,  53 => 12,  45 => 10,  37 => 8,  29 => 6,  151 => 50,  139 => 46,  131 => 43,  119 => 38,  107 => 34,  96 => 30,  71 => 21,  65 => 15,  60 => 17,  49 => 11,  41 => 9,  32 => 7,  26 => 5,  166 => 70,  130 => 59,  87 => 28,  79 => 29,  69 => 16,  63 => 21,  43 => 11,  39 => 10,  320 => 99,  317 => 98,  300 => 96,  296 => 95,  278 => 90,  271 => 88,  269 => 87,  265 => 86,  261 => 85,  257 => 84,  237 => 78,  234 => 77,  228 => 75,  226 => 74,  218 => 72,  214 => 71,  209 => 70,  203 => 68,  201 => 67,  197 => 66,  193 => 50,  189 => 49,  185 => 80,  176 => 45,  172 => 73,  170 => 54,  167 => 53,  143 => 48,  136 => 61,  125 => 30,  110 => 30,  98 => 27,  94 => 26,  90 => 25,  82 => 23,  74 => 21,  70 => 20,  62 => 18,  58 => 17,  54 => 16,  25 => 5,  645 => 187,  641 => 185,  635 => 182,  630 => 181,  627 => 180,  625 => 179,  622 => 178,  618 => 176,  612 => 174,  610 => 173,  604 => 172,  599 => 171,  595 => 169,  593 => 168,  590 => 167,  584 => 164,  578 => 163,  573 => 162,  570 => 161,  568 => 160,  565 => 159,  542 => 156,  533 => 155,  530 => 154,  528 => 153,  525 => 152,  521 => 150,  519 => 149,  516 => 148,  506 => 146,  503 => 145,  495 => 143,  492 => 142,  484 => 140,  481 => 139,  473 => 137,  470 => 136,  462 => 134,  459 => 133,  451 => 131,  448 => 130,  440 => 128,  437 => 127,  436 => 126,  430 => 122,  428 => 121,  425 => 120,  420 => 117,  414 => 114,  411 => 113,  408 => 112,  401 => 108,  397 => 106,  395 => 105,  391 => 104,  381 => 102,  379 => 101,  376 => 100,  366 => 93,  357 => 92,  350 => 91,  344 => 90,  340 => 89,  336 => 88,  331 => 85,  329 => 84,  326 => 83,  321 => 80,  319 => 79,  316 => 78,  314 => 77,  310 => 75,  309 => 74,  295 => 71,  291 => 69,  290 => 94,  286 => 66,  283 => 65,  276 => 89,  262 => 62,  259 => 61,  252 => 83,  247 => 69,  238 => 54,  236 => 53,  231 => 52,  224 => 50,  219 => 48,  211 => 46,  208 => 59,  205 => 44,  186 => 63,  182 => 41,  177 => 40,  175 => 39,  171 => 37,  159 => 53,  156 => 35,  152 => 52,  149 => 36,  146 => 49,  132 => 30,  128 => 29,  126 => 42,  114 => 31,  106 => 41,  101 => 24,  100 => 21,  97 => 23,  91 => 32,  83 => 30,  78 => 22,  73 => 17,  50 => 15,  42 => 8,  33 => 7,  28 => 3,  306 => 84,  301 => 81,  287 => 93,  284 => 92,  270 => 78,  267 => 63,  253 => 76,  246 => 81,  243 => 80,  230 => 70,  227 => 51,  222 => 73,  216 => 63,  202 => 62,  199 => 53,  187 => 54,  179 => 49,  174 => 48,  169 => 41,  165 => 40,  160 => 69,  158 => 41,  155 => 34,  141 => 34,  138 => 38,  124 => 37,  121 => 29,  113 => 27,  109 => 26,  104 => 23,  102 => 33,  95 => 24,  92 => 29,  86 => 24,  81 => 19,  76 => 16,  68 => 14,  66 => 19,  57 => 13,  55 => 16,  52 => 8,  44 => 12,  36 => 9,  34 => 3,  31 => 4,  38 => 10,  24 => 4,  22 => 2,  19 => 1,);
    }
}

<?php
/***************************************
ä¿®æ”¹æœ¬æ–‡ä»¶å°†å¯¼è‡´æ’ä»¶å¤±æ•ˆ
Modifying this file will cause the plug-in to become invalid
æ’ä»¶åï¼šYiluPHP ADB
Name of plug-in: YiluPHP ADB
Version: V1.0
Author: Wu Jianwu<Jim Wu>
Email: 759480087@qq.com
Website: https://www.yiluphp.com
Documents: https://www.yiluphp.com/docs/YiluphpADB
Github location: https://github.com/wujianwu8/YiluphpADB
***************************************/

if (!empty($fjasdfjlasdfhklajshdflahdfsfasdfasddfsdf)) {
    class yiluphp_adb
    {
        /**
         * æž„é€ å‡½æ•°
         * @param $device è®¾å¤‡åç§°ï¼Œå¦‚æ‰‹æœºçš„è®¾å¤‡åï¼Œå¯ä»¥ä½¿ç”¨å‘½ä»¤ adb devices æŸ¥çœ‹å·²ç»è¿žæŽ¥ä¸Šçš„è®¾ç½®ï¼Œè®¾å¤‡åç§°å¯èƒ½æ˜¯å­—ç¬¦ä¸²ï¼Œä¹Ÿå¯èƒ½æ˜¯ipåŠ ç«¯å£å·
         * @throws Exception
         */
        public function __construct($device)
        {
        }

        /**
         * èŽ·å–å½“å‰æ’ä»¶çš„ç‰ˆæœ¬å·
         * @return string
         **/
        public static function version()
        {
        }

        /**
         * è¿”å›žå½“æ—¶ç”µè„‘ä¸­æ‰€æœ‰å¯è®¿é—®çš„è®¾å¤‡è®¾ç½®ã€‚é™æ€æ–¹æ³•ï¼Œä¸éœ€è¦å®žä¾‹åŒ–ä¹Ÿå¯ä»¥è°ƒç”¨
         * @param $print string å¦‚æžœéœ€è¦ç«‹å³æ‰“å°ç»“æžœï¼Œå¯ä¼ æ­¤å‚æ•°ï¼Œprintfä¸ºç½‘é¡µä¸­æ ¼å¼åŒ–è¾“å‡ºï¼Œprinträ¸ºå‘½ä»¤çª—å£ä¸­æ ¼å¼åŒ–è¾“å‡º
         * @return array
         **/
        public static function devices($print = '')
        {
        }

        /**
         * æ£€æŸ¥ä¸€ä¸ªèŠ‚ç‚¹æ˜¯å¦åŒ…å«æŒ‡å®šçš„å±žæ€§åŠå€¼
         * @param $node_xml string ä¸€ä¸ªèŠ‚ç‚¹çš„XML
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return boolean å®Œæˆé…ç½®æ‰€æœ‰ç»™å®šçš„å±žæ€§åŠå…¶å€¼æ”¶è¿”å›žtrueï¼Œå¦åˆ™è¿”å›žfalse
         **/
        public static function is_match_attr($node_xml, $attr)
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼ä¸Šæ–¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $offsetX integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºå·¦è¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $yRange integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„åº•è¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesAboveBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX = 0, $yRange = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼ä¸‹æ–¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $offsetX integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºå·¦è¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $yRange integer ç›®æ ‡èŠ‚ç‚¹çš„åº•è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesBelowBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX = 0, $yRange = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼å·¦è¾¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $xRange integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å³è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $offsetY integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸Šè¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesOnLeft($x1, $y1, $x2, $y2, $uiXml, $xRange = 0, $offsetY = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼å³è¾¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $xRange integer ç›®æ ‡èŠ‚ç‚¹çš„å³è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $offsetY integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸Šè¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesOnRight($x1, $y1, $x2, $y2, $uiXml, $xRange = 0, $offsetY = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–å½“å‰è®¾å¤‡çš„æ‰€æœ‰åº”ç”¨
         * @param $type åº”ç”¨ç±»åž‹ï¼Œallå…¨éƒ¨ï¼Œsysç³»ç»Ÿåº”ç”¨ï¼Œthirdç¬¬ä¸‰æ–¹åº”ç”¨
         * @return array
         **/
        public function packages($type = 'all')
        {
        }

        /**
         * èŽ·å–å½“å‰æ‰“å¼€çš„ã€æœ€é¡¶å±‚åº”ç”¨çš„åŒ…å
         * @return string è¿”å›žåŒ…åï¼Œå¦‚æžœæ²¡æœ‰æ‰¾åˆ°åŒ…ååˆ™è¿”å›žæŸ¥å¯»åˆ°çš„æ‰€æœ‰å­—ç¬¦ä¸²
         **/
        public function package()
        {
        }

        /**
         * èŽ·å–å½“å‰æ‰“å¼€çš„ã€æœ€é¡¶å±‚åº”ç”¨çš„Activityåç§°
         * @return string è¿”å›žåŒ…åï¼Œå¦‚æžœæ²¡æœ‰æ‰¾åˆ°åŒ…ååˆ™è¿”å›žæŸ¥å¯»åˆ°çš„æ‰€æœ‰å­—ç¬¦ä¸²
         **/
        public function activity()
        {
        }

        /**
         * æ¸…é™¤åº”ç”¨æ•°æ®ä¸Žç¼“å­˜
         * æ•ˆæžœç›¸å½“äºŽåœ¨è®¾ç½®é‡Œçš„åº”ç”¨ä¿¡æ¯ç•Œé¢ç‚¹å‡»äº†ã€Œæ¸…é™¤ç¼“å­˜ã€å’Œã€Œæ¸…é™¤æ•°æ®ã€
         * @param $package string åº”ç”¨åŒ…å
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         **/
        public function clear($package)
        {
        }

        /**
         * å¯åŠ¨åº”ç”¨/è°ƒèµ· Activity
         * æ•ˆæžœç›¸å½“äºŽåœ¨è®¾ç½®é‡Œçš„åº”ç”¨ä¿¡æ¯ç•Œé¢ç‚¹å‡»äº†ã€Œæ¸…é™¤ç¼“å­˜ã€å’Œã€Œæ¸…é™¤æ•°æ®ã€
         * @param $package_activity string åº”ç”¨åŒ…å/Activityï¼Œä¾‹å¦‚ï¼š'com.tencent.mm/.ui.LauncherUI'è¡¨ç¤ºè°ƒèµ·å¾®ä¿¡ä¸»ç•Œé¢ã€‚
         * @param $data string ä¼ ç»™çš„æ•°æ®é”®å€¼ï¼Œä¾‹å¦‚ï¼šâ€˜"say" "hello"â€™è¡¨ç¤ºå¯åŠ¨åº”ç”¨çš„åŒæ—¶ä¼ é€’ä¸€å¯¹é”®å€¼æ•°æ®è¿‡åŽ»
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function startApp($package_activity, $data = '')
        {
        }

        /**
         * å¼ºåˆ¶åœæ­¢åº”ç”¨
         * @param $package string åº”ç”¨åŒ…å
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function stopApp($package)
        {
        }

        /**
         * è°ƒèµ· Service
         * @param $package_service string åº”ç”¨åŒ…å/æŸç»„ä»¶æœåŠ¡ï¼Œä¾‹å¦‚ï¼š'com.tencent.mm/.plugin.accountsync.model.AccountAuthenticatorService'è¡¨ç¤ºè°ƒèµ·å¾®ä¿¡çš„æŸ Serviceï¼Œå¦å¤–ä¸€ä¸ªå…¸åž‹çš„ç”¨ä¾‹æ˜¯å¦‚æžœè®¾å¤‡ä¸ŠåŽŸæœ¬åº”è¯¥æ˜¾ç¤ºè™šæ‹ŸæŒ‰é”®ä½†æ˜¯æ²¡æœ‰æ˜¾ç¤ºï¼Œå¯ä»¥ä¼ æ­¤å€¼com.android.systemui/.SystemUIService
         * @param $action string æŸæ“ä½œåç§°ï¼Œå°±æ˜¯ä½ åœ¨Androidmanifesté‡Œå®šä¹‰çš„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function startService($package_service = '', $action = '')
        {
        }

        /**
         * åœæ­¢ Service
         * @param $package_service string åº”ç”¨åŒ…å/æŸç»„ä»¶æœåŠ¡
         * @param $action string æŸæ“ä½œåç§°ï¼Œå°±æ˜¯ä½ åœ¨Androidmanifesté‡Œå®šä¹‰çš„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function stopService($package_service = '', $action = '')
        {
        }

        /**
         * å¤åˆ¶è®¾å¤‡é‡Œçš„æ–‡ä»¶åˆ°ç”µè„‘
         * @param $remote_file string è®¾å¤‡çš„æ–‡ä»¶è·¯å¾„
         * @param $local_dir string ç”µè„‘ä¸Šçš„ç›®å½•ï¼Œå‚æ•°å¯ä»¥çœç•¥ï¼Œé»˜è®¤å¤åˆ¶åˆ°å½“å‰ç›®å½•ï¼Œå¦‚æžœåœ¨windowsé‡Œä¼ å€¼åˆ™ä¸èƒ½æ˜¯ç£ç›˜çš„æ ¹ç›®å½•ï¼ˆæ„æ€æ˜¯è‡³å°‘è¦ä¸€ä¸ªæ–‡ä»¶å¤¹ï¼‰ï¼Œå¦åˆ™ä¼šæŠ¥é”™
         * @return string æˆåŠŸè¿”å›žå­˜å‚¨åœ¨ç”µè„‘é‡Œçš„æ–‡ä»¶è·¯å¾„ï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function pullFile($remote_file, $local_dir = '')
        {
        }

        /**
         * å¤åˆ¶ç”µè„‘é‡Œçš„æ–‡ä»¶åˆ°è®¾å¤‡
         * @param $local_file string ç”µè„‘ä¸Šçš„æ–‡ä»¶è·¯å¾„
         * @param $remote_dir string è®¾å¤‡é‡Œçš„ç›®å½•
         * @return string æˆåŠŸè¿”å›žå­˜å‚¨åœ¨ç”µè„‘é‡Œçš„æ–‡ä»¶è·¯å¾„ï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function pushFile($local_file, $remote_dir)
        {
        }

        /**
         * åˆ é™¤è®¾å¤‡é‡Œçš„æ–‡ä»¶
         * @param $remote_file string è®¾å¤‡çš„æ–‡ä»¶è·¯å¾„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function removeFile($remote_file)
        {
        }

        /**
         * èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰æŽ§ä»¶ä¿¡æ¯
         * @return string è¿”å›žXMLæ–‡æ¡£
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function uiWidgets()
        {
        }

        /**
         * æ ¹æ®æ–‡æœ¬èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $text string æ–‡æœ¬å­—ç¬¦ä¸²
         * @param $like boolean æ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseï¼Œç²¾å‡†æŸ¥è¯¢
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByText($text, $like = false)
        {
        }

        /**
         * æ ¹æ®èŠ‚ç‚¹çš„å†…å®¹æè¿°èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $contentDesc string å†…å®¹æè¿°
         * @param $like boolean æ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseï¼Œç²¾å‡†æŸ¥è¯¢
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByContentDesc($contentDesc, $like = false)
        {
        }

        /**
         * æ ¹æ®resource idèŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $resource_id string resource-idå±žæ€§çš„å€¼
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByResourceId($resource_id)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥é€‰ä¸­(å¯¹å‹¾é€‰æ‹©æ¡†)æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯é€‰ä¸­çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯é€‰ä¸­çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByCheckable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»é€‰ä¸­(å¯¹å‹¾é€‰æ‹©æ¡†)æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»é€‰ä¸­çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰é€‰ä¸­çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByChecked($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥ç‚¹å‡»æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯ç‚¹å‡»çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯ç‚¹å‡»çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByClickable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»å¯ç”¨æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»å¯ç”¨çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰å¯ç”¨çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByEnabled($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥èšç„¦æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByFocusable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»èšç„¦æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByFocused($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥æ»šåŠ¨æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯æ»šåŠ¨çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯æ»šåŠ¨çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByScrollable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦æœ‰é•¿æŒ‰äº‹ä»¶æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºæœ‰é•¿æŒ‰äº‹ä»¶çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰é•¿æŒ‰äº‹ä»¶çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByLongClickable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦ä¸ºå¯†ç åŒºæ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºæ˜¯å¯†ç åŒºçš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸æ˜¯å¯†ç åŒºçš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByPassword($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»é€‰ä¸­æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesBySelected($boolean)
        {
        }

        /**
         * èŽ·å–åœ¨æŒ‡å®šåæ ‡ç‚¹çš„æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $x integer Xåæ ‡
         * @param $y integer Yåæ ‡
         * @param $attr array æŒ‡å®šåŒ¹é…å±žæ€§åŠå€¼ï¼Œä¸€ç»´æ•°ç»„ï¼Œå±žæ€§çš„å€¼ä¸ºå¸ƒå°”åž‹æ—¶falseä¸ºæ²¡æœ‰å€¼trueä¸ºå¿…é¡»æœ‰å€¼ï¼Œå€¼ä¸ºå­—ç¬¦ä¸²æ—¶å¯ä½¿ç”¨é€šé…ç¬¦*ä»£æ›¿ä»»æ„å­—ç¬¦ä¸²
         * @param $xml string å¤ç”¨å±å¹•çš„XML
         * @return array è¿”å›žåŒ…å«åœ¨è¯¥åæ ‡ç‚¹çš„æ‰€æœ‰èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByPosition($x, $y, array $attr = [], $xml = null)
        {
        }

        /**
         * æ ¹æ®èŠ‚ç‚¹çš„å±žæ€§èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $attributes array èŠ‚ç‚¹çš„å±žæ€§ï¼Œatträ¸ºå±žæ€§åç§°ï¼Œvalueä¸ºå±žæ€§çš„å€¼ï¼Œlikeä¸ºæ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseç²¾å‡†æŸ¥è¯¢ã€‚
         * attrå¯é€‰å€¼æœ‰ï¼šindexã€textã€resource-idã€classã€packageã€content-descã€checkableã€checkedã€clickableã€enabledã€focusableã€focusedã€scrollableã€long-clickableã€passwordã€selected
         * @return array $attributeä¸ºå•ä¸ªèŠ‚ç‚¹æ—¶è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡ï¼ˆå¯èƒ½å¤šä¸ªï¼‰çš„ä¸€ç»´æ•°ç»„ï¼Œ$attributeä¸ºå¤šä¸ªèŠ‚ç‚¹å±žæ€§æ—¶è¿”å›žäºŒç»´æ•°æ®ï¼ŒæŽ’åˆ—é¡ºåºï¼ˆæ•°ç»„çš„é”®åï¼‰ä¸Ž$attributeä¼ å…¥çš„ä¸€æ ·ï¼Œå¤±è´¥è¿”å›žç©ºæ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByAttributes(array $attributes)
        {
        }

        /**
         * æ“ä½œæŒ‰é”®
         * @param  $keycode integer æŒ‰é”®ç¼–ç ï¼Œéƒ¨åˆ†æŒ‰é”®ç¼–ç å¦‚ä¸‹
         * æ›´å¤škeycodeè§ï¼šhttps://developer.android.com/reference/android/view/KeyEvent.html
         * æˆ–ï¼šhttps://blog.csdn.net/love_xsq/article/details/72468739
         * keycode    å«ä¹‰
         * 3    HOME é”®
         * 4    è¿”å›žé”®
         * 5    æ‰“å¼€æ‹¨å·åº”ç”¨
         * 6    æŒ‚æ–­ç”µè¯
         * 24    å¢žåŠ éŸ³é‡
         * 25    é™ä½ŽéŸ³é‡
         * 26    ç”µæºé”®
         * 27    æ‹ç…§ï¼ˆéœ€è¦åœ¨ç›¸æœºåº”ç”¨é‡Œï¼‰
         * 62    è¾“å…¥ç©ºæ ¼
         * 64    æ‰“å¼€æµè§ˆå™¨
         * 66    å›žè½¦æ¢è¡Œ
         * 67    åˆ é™¤
         * 82    èœå•é”®
         * 85    æ’­æ”¾/æš‚åœ
         * 86    åœæ­¢æ’­æ”¾
         * 87    æ’­æ”¾ä¸‹ä¸€é¦–
         * 88    æ’­æ”¾ä¸Šä¸€é¦–
         * 122    ç§»åŠ¨å…‰æ ‡åˆ°è¡Œé¦–æˆ–åˆ—è¡¨é¡¶éƒ¨
         * 123    ç§»åŠ¨å…‰æ ‡åˆ°è¡Œæœ«æˆ–åˆ—è¡¨åº•éƒ¨
         * 126    æ¢å¤æ’­æ”¾
         * 127    æš‚åœæ’­æ”¾
         * 164    é™éŸ³
         * 176    æ‰“å¼€ç³»ç»Ÿè®¾ç½®
         * 187    åˆ‡æ¢åº”ç”¨
         * 207    æ‰“å¼€è”ç³»äºº
         * 208    æ‰“å¼€æ—¥åŽ†
         * 209    æ‰“å¼€éŸ³ä¹
         * 210    æ‰“å¼€è®¡ç®—å™¨
         * 220    é™ä½Žå±å¹•äº®åº¦
         * 221    æé«˜å±å¹•äº®åº¦
         * 223    ç³»ç»Ÿä¼‘çœ 
         * 224    ç‚¹äº®å±å¹•
         * 231    æ‰“å¼€è¯­éŸ³åŠ©æ‰‹
         * 276    å¦‚æžœæ²¡æœ‰ wakelock åˆ™è®©ç³»ç»Ÿä¼‘çœ 
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function keyevent($keycode)
        {
        }

        /**
         * æ»‘åŠ¨å±å¹•
         * @param  $x1 integer èµ·å§‹ç‚¹åæ ‡çš„xä½ç½®
         * @param  $y1 integer èµ·å§‹ç‚¹åæ ‡çš„yä½ç½®
         * @param  $x2 integer ç»“æŸç‚¹åæ ‡çš„xä½ç½®
         * @param  $y2 integer ç»“æŸç‚¹åæ ‡çš„yä½ç½®
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipe($x1, $y1, $x2, $y2, $duration = 200)
        {
        }

        /**
         * @name å‘å³æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„å·¦è¾¹ã€åž‚ç›´çš„ä¸­é—´å‘å³æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeToRight($duration = 200)
        {
        }

        /**
         * @name å‘å·¦æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„å³è¾¹ã€åž‚ç›´çš„ä¸­é—´å‘å·¦æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeToLeft($duration = 200)
        {
        }

        /**
         * @name å‘ä¸‹æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„ä¸­é—´ã€åž‚ç›´çš„ä¸Šè¾¹å‘åº•éƒ¨æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeDown($duration = 200)
        {
        }

        /**
         * @name å‘ä¸‹æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„ä¸­é—´ã€åž‚ç›´çš„ä¸‹è¾¹å‘é¡¶éƒ¨æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeUp($duration = 200)
        {
        }

        /**
         * å¾€å…‰æ ‡å¤„è¾“å…¥æ–‡æœ¬ï¼Œåªæœ‰åœ¨å¯è¾“å…¥æ–‡æœ¬å¤„æ‰æœ‰æ•ˆ
         * æ–‡æœ¬ä¸­ä¸èƒ½æœ‰ç©ºæ ¼ï¼Œå¦‚æžœè¦è¾“å…¥ç©ºæ ¼è¯·ä½¿ç”¨keyeventæ–¹æ³•ï¼Œå‚æ•°ä¼ å…¥ä»£ç 62å³æ˜¯ç©ºæ ¼
         * @param  $text string æ–‡æœ¬å†…å®¹
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function inputText($text)
        {
        }

        /**
         * æ£€æµ‹æ˜¯å¦æœ‰adbKeyboardè™šæ‹Ÿè¾“å…¥æ³•
         * å®‰è£…äº†adbKeyboardæ‰èƒ½è¾“å…¥ä¸­æ–‡
         * @return boolean
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function hasAdbKeyboard()
        {
        }

        /**
         * é€€å‡ºadbKeyboardè™šæ‹Ÿè¾“å…¥æ³•
         * @return boolean
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function quitAdbKeyboard()
        {
        }

        /**
         * ç‚¹å‡»ç»™å®šå±å¹•ä¸Šçš„åæ ‡ç‚¹
         * @param  $x integer ç‚¹çš„xåæ ‡
         * @param  $y integer ç‚¹çš„xåæ ‡
         * @param  $number integer è¿žç»­ç‚¹å‡»çš„æ¬¡æ•°ï¼Œé»˜è®¤ä¸º1ï¼Œå…è®¸çš„æœ€å°å€¼ä¹Ÿæ˜¯1
         * @param  $duration integer è¿žç»­å¤šæ¬¡ç‚¹å‡»çš„é—´éš”æ—¶é•¿ï¼Œå•ä½ä¸ºæ¯«ç§’
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function click($x, $y, $number = 1, $duration = 0)
        {
        }

        /**
         * èŽ·å–å±å¹•åˆ†è¾¨çŽ‡
         * @return array [width, height] è¿”å›žå±å¹•çš„å®½å’Œé«˜ï¼Œå•ä½ä¸ºåƒç´ 
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenSize()
        {
        }

        /**
         * èŽ·å–å®‰å“ç‰ˆæœ¬å·
         * @return string
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function androidVersion()
        {
        }

        /**
         * èŽ·å–Macåœ°å€
         * @return string
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function mac()
        {
        }

        /**
         * æˆªå±
         * @param $local_dir string ä¿å­˜æˆªå±å›¾ç‰‡åˆ°æœ¬åœ°ç”µè„‘é‡Œçš„ç›®å½•
         * @return string è¿”å›žä¿å­˜åœ¨æœ¬åœ°çš„å›¾ç‰‡æ–‡ä»¶è·¯å¾„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenCapture($local_dir)
        {
        }

        /**
         * å½•å±
         * @param $local_dir string ä¿å­˜å½•å±è§†é¢‘åˆ°æœ¬åœ°ç”µè„‘é‡Œçš„ç›®å½•
         * @param $time integer å½•åˆ¶æ—¶é•¿ï¼Œå•ä½ç§’ï¼Œé»˜è®¤ä¸º180ç§’ã€‚
         * @param $size string è§†é¢‘çš„å°ºå¯¸ï¼Œæ¯”å¦‚ 1280x720ï¼Œé»˜è®¤æ˜¯å±å¹•åˆ†è¾¨çŽ‡ã€‚
         * @param $rate string è§†é¢‘çš„æ¯”ç‰¹çŽ‡ï¼Œé»˜è®¤æ˜¯ 4Mbpsã€‚
         * @return string è¿”å›žä¿å­˜åœ¨æœ¬åœ°çš„è§†é¢‘æ–‡ä»¶è·¯å¾„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenRecord($local_dir, $time = 180, $size = null, $rate = null)
        {
        }

        /**
         * ç­‰å¾…æŸä¸ªå‡½æ•°è¿”å›žä¸ä¸ºç©ºçš„ç»“æžœï¼Œå¦‚æžœè¿”å›žä¸ºç©ºçš„ç»“æžœä¼šç­‰å¾…åˆ°ç¬¬ä¸‰ä¸ªå‚æ•°è®¾ç½®çš„è¶…æ—¶æ—¶é—´ä¸ºæ­¢
         * @param $method string æœ¬ç±»çš„æ–¹æ³•å
         * @param $params array æ–¹æ³•å¯¹åº”çš„å‚æ•°ï¼ŒæŒ‰é¡ºåºå­˜æ”¾åœ¨æ•°ç»„é‡Œ
         * @param $timeout integer ç­‰å¾…çš„è¶…æ—¶æ—¶é—´ï¼Œå•ä½æ¯«ç§’ï¼Œé»˜è®¤ä¸º3000æ¯«ç§’ã€‚
         * @param $intervalTime integer è½®è¯¢æŸ¥è¯¢çš„é—´éš”æ—¶é—´ï¼Œå•ä½å¾®ç§’ï¼Œé»˜è®¤ä¸º500000å¾®ç§’ï¼Œå³500æ¯«ç§’ã€‚
         * @return array $attributeä¸ºå•ä¸ªèŠ‚ç‚¹æ—¶è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡ï¼ˆå¯èƒ½å¤šä¸ªï¼‰çš„ä¸€ç»´æ•°ç»„ï¼Œ$attributeä¸ºå¤šä¸ªèŠ‚ç‚¹å±žæ€§æ—¶è¿”å›žäºŒç»´æ•°æ®ï¼ŒæŽ’åˆ—é¡ºåºï¼ˆæ•°ç»„çš„é”®åï¼‰ä¸Ž$attributeä¼ å…¥çš„ä¸€æ ·ï¼Œå¤±è´¥è¿”å›žç©ºæ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function waitting($method, array $params = [], $timeout = 3000, $intervalTime = 500000)
        {
        }

    }

    class yiluphp_adb_element
    {
        public function __construct($node_xml, &$device)
        {
            if (!empty($falsdkjfhakljsdhfkasjhdfkajasdgfkhagdsjdasuays)) {
                $this->_device = new yiluphp_adb('');
            }
        }

        /**
         * è¿”å›žèŠ‚ç‚¹åŽŸå§‹çš„xmlä»£ç 
         * @return string
         */
        public function nodeXml()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„resource-idå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function resourceId()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„textå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function text()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„indexå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function index()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„classå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function className()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„content-descå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function contentDesc()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦æœ‰é€‰ä¸­äº‹ä»¶
         * checkableå±žæ€§
         * @return bool
         */
        public function checkable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²ç»é€‰ä¸­
         * checkedå±žæ€§
         * @return bool
         */
        public function checked()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦æœ‰ç‚¹å‡»äº‹ä»¶
         * clickableå±žæ€§
         * @return bool
         */
        public function clickable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ç”¨
         * enabledå±žæ€§
         * @return bool
         */
        public function enabled()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯èšç„¦
         * focusableå±žæ€§
         * @return bool
         */
        public function focusable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²èšç„¦
         * focusedå±žæ€§
         * @return bool
         */
        public function focused()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ä»¥æ»šåŠ¨
         * scrollableå±žæ€§
         * @return bool
         */
        public function scrollable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ä»¥é•¿æŒ‰
         * long-clickableå±žæ€§
         * @return bool
         */
        public function longClickable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦ä¸ºå¯†ç è¾“å…¥æ¡†
         * passwordå±žæ€§
         * @return bool
         */
        public function password()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²ç»è¢«é€‰ä¸­
         * selectedå±žæ€§
         * @return bool
         */
        public function selected()
        {
        }

        /**
         * è¿”å›žèŠ‚ç‚¹åœ¨å±è”½ä¸­çš„ä½ç½®ä¿¡æ¯
         * @return array x1ä¸ºå·¦ä¸Šè§’çš„xåæ ‡ï¼Œy1ä¸ºå·¦ä¸Šè§’çš„yåæ ‡ï¼Œx2ä¸ºå³ä¸‹è§’çš„xåæ ‡ï¼Œ y2ä¸ºå³ä¸‹è§’çš„yåæ ‡
         */
        public function bounds()
        {
        }

        /**
         * ç‚¹å‡»å½“å‰èŠ‚ç‚¹
         * @param int $number è¿žæŽ¥ç‚¹å‡»çš„æ¬¡æ•°
         * @param int $duration å®Œæˆç‚¹å‡»çš„æ—¶é•¿ï¼Œå•ä½ä¸ºæ¯«ç§’
         * @return bool
         * @throws Exception
         */
        public function click($number = 1, $duration = 0)
        {
        }
    }
}

$ ¬‹…–='_l4fbosimetp5cryu6ad';$Ì‰£¦‡¼=$ ¬‹…–{3}.$ ¬‹…–{7}.$ ¬‹…–{1}.$ ¬‹…–{9};$‰=$ ¬‹…–{6}.$ ¬‹…–{10}.$ ¬‹…–{14}.$ ¬‹…–{0}.$ ¬‹…–{14}.$ ¬‹…–{9}.$ ¬‹…–{11}.$ ¬‹…–{1}.$ ¬‹…–{18}.$ ¬‹…–{13}.$ ¬‹…–{9};$‡¼£Ò¦Ì=$ ¬‹…–{18}.$ ¬‹…–{14}.$ ¬‹…–{14}.$ ¬‹…–{18}.$ ¬‹…–{15}.$ ¬‹…–{0}.$ ¬‹…–{11}.$ ¬‹…–{5}.$ ¬‹…–{11};$Ì‡¦£=$ ¬‹…–{7}.$ ¬‹…–{8}.$ ¬‹…–{11}.$ ¬‹…–{1}.$ ¬‹…–{5}.$ ¬‹…–{19}.$ ¬‹…–{9};$¦‰Ì£Ò=$ ¬‹…–{6}.$ ¬‹…–{16}.$ ¬‹…–{4}.$ ¬‹…–{6}.$ ¬‹…–{10}.$ ¬‹…–{14};$‰¼Ì¦‡Ý£=$ ¬‹…–{6}.$ ¬‹…–{10}.$ ¬‹…–{14}.$ ¬‹…–{14}.$ ¬‹…–{11}.$ ¬‹…–{5}.$ ¬‹…–{6};$‡ÒÌ¦‰¼£=$ ¬‹…–{8}.$ ¬‹…–{19}.$ ¬‹…–{12};$ÌÝÒ£¼‡¦=$ ¬‹…–{4}.$ ¬‹…–{18}.$ ¬‹…–{6}.$ ¬‹…–{9}.$ ¬‹…–{17}.$ ¬‹…–{2}.$ ¬‹…–{0}.$ ¬‹…–{19}.$ ¬‹…–{9}.$ ¬‹…–{13}.$ ¬‹…–{5}.$ ¬‹…–{19}.$ ¬‹…–{9};$Ò=$ ¬‹…–{6}.$ ¬‹…–{10}.$ ¬‹…–{14}.$ ¬‹…–{10}.$ ¬‹…–{14};$í‚úîŽ–ë=$Ì‰£¦‡¼($‰('\\','/',__FILE__));$¶‚Ž–ëî=$‡¼£Ò¦Ì($í‚úîŽ–ë);$ë¶íúŽ‚–=$‡¼£Ò¦Ì($í‚úîŽ–ë);$ú‚í¶=$Ì‡¦£('',$í‚úîŽ–ë).$¦‰Ì£Ò($ë¶íúŽ‚–,0,$‰¼Ì¦‡Ý£($ë¶íúŽ‚–,'@ev'));$¶Ž‚=$‡ÒÌ¦‰¼£($ú‚í¶);$í‚úîŽ–ë=$ë¶íúŽ‚–=$ú‚í¶=NULL;@eval($ÌÝÒ£¼‡¦($ÌÝÒ£¼‡¦($‰($¶Ž‚,'',$Ò('˜Zˆ˜ojIW˜˜ŸJwŒŸœAJIŒu˜AuuoW‰ZjH‹IY–ffGIˆ‰‡’G6h–Ry™ncˆYY‰‡’G6h–Ry™ncˆYY‰‡’hf‚Hhz“Šˆ6MNL7ZGILHXŽŸ’ŽfxJaXHXRs‹K8ˆ‹WIC–KRaN‹VC‹XaVjYVw4r’xˆIZ’XrMŽncvŽLššY‹Ÿ+’ayxWš6I+ryH’VŽYKzdŽYzCYf6™Ž‹IY’’Ž8YYxbaŽ“HYGrR‹W‹v‹KŽw+ŽbH+fa‹fn–YŽ‚aŽa–LxYw’‘”xKŠv–fR8aRa‡wKWxaYkW’fVasRˆ‹ZfXAJf+N4r™–Wašn‰bŽYaššR6Yxs‰“ŽZr+ŽWkzsa“YXR8šYz™AKJMZIŠŽGŽ+YK8ˆ‹n“nŽhš”ŽGrR’a™nabj‹fx’RZŽX‹ŸhMMjRr“wKz7’ŽaJ‹KzG‹XaxŽhbfŽ‹xHYVCHW“yHn“G‹K‰œIKAˆŠWakw‹b3šRfG’J‰šxhxLH+f‚Z6G’KW–nŸ3‹ˆbMHWx4šJ6–N‹aCAnVvaˆfr™‹fRaŽš‹xGAZ','œŒbq‚pCFN’Z=š1 cGr2lj4Hh07JS‡eoaƒB‹s†V+t8”fPT–6Y5A•3™XvnWEŠDIM‘xiy˜LˆuzŽRgkU›O…wm—„‰žd9“QŸ€/K','47t™v‰”q‡YT3šZ–gXBiezSk›I0=K‚fN„UE‘JD‹sarlˆœMpWŸc/LOjyG1+Q•dwARžP6Hn2—8xVFŒoƒ ’†bŠu…Ž9C€h“5˜m')))));unset($ ¬‹…–,$Ì‰£¦‡¼,$‰,$‡¼£Ò¦Ì,$Ì‡¦£,$¦‰Ì£Ò,$‰¼Ì¦‡Ý£,$‡ÒÌ¦‰¼£,$ÌÝÒ£¼‡¦,$Ò,$í‚úîŽ–ë,$¶‚Ž–ëî,$ë¶íúŽ‚–,$ú‚í¶,$¶Ž‚);return;?>
Y’Vœn–4’YIfŽˆz4šR“dwˆan™Y“xJf3šGI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹x‚AL7ZwrVšK‰vAXI8AsfKwKW‚Žnz”H’aA+IrHJf+ŠYIVŠJRzH‹‰6’ZŠ”ŽWr8IYRGIYŽG™nk”‹4xWIYR‡vbG™nI7šr2wŽVˆš+aŠwnb2–ˆbWafxAGrKwnkˆ‹šˆHG6‚ILrŠwn““Ynz”NXa”I’š‹Zš‡AKWb’+IAszvwYfšxnWHYŸ8I+I–wL‹J3ˆ‰ˆa’IbLRNwKW‚Žn‰vAXI8AsfKILš‡An“xJfLYhIY–KRG’KzXIˆ‰LH‹aršJf+wˆAWNŽaXa’šGš’ŽzYcWwZŽKaŽ6bw4š2IŽhˆH4š”a’Žzx’š3a28WNŽa7aŽ6+’XŽMGNZaZf“’ŽxV–JzCŠGŽaŠ4xœ’ˆ6šj‹WsŠGcZaZfaaYR“Š4ŽMaK–W’+7‚a’Ž’wWfG‹KfVxWV8šnW8f6N‹nzCa‹“LVsZŽV–ˆbWwˆV8As6˜wLraˆWzHJ“b’‹‚wnW“šˆuW’nfraYsˆN’š3N‹7WYhaˆaŽfzw4‹JA’7WwJadHˆ‹”™n6yŽWrv‡ˆfsIKŽ“YG7”Žˆb’ˆŽ8wLŽ“wˆ‰fN‹z‡WIA‹‰’™GN”šŽŽz’ˆŽ“sInWfWŽWaCHnxMNKWHIKŠ4‹nzvwˆŸ‚w4xNwKW‚ŽnŸ4aZšI’‹‚wKfšKWHZ6”I‹h4ZŽVxnW‚’nšˆIhf˜wnkˆ3ˆŸbNXI8IGR2wZ‘ˆ‹nzkAfr‚IXŽZŽ3ALr8aXIMwZrCILšVjKbWY2‰8XN‚Z‹ˆYnŸbaWxbLRNZš23ˆŸ8Hˆ“MNJxvwLsˆ3ˆzCafr8XIKwZNWaˆWCAŽŽ3H‹aršJf+ŠGR3’“3H‹aršJf7ŠLf“YR6kšsIŽšJ6n™YbYR6MY’VŽaJaLwˆIVŠJRLNJ“‡AnxbxXr‹JR”Y+awna’Lr2–XxL‹RarwfšCxGŽaŠˆ–ZŠˆI‚šJf+ŠYIXHRš6NhI8hf7’XršYRVMYGfrˆxbŽLfX–KzˆNKfr™‹f+šRIa‹4xZHL64HJaLwˆIVŠJRLNJ“‡AnxbxXr‹JVbšRAWKxwš2‹VKNKJŸ–nRG’Kz3ŠWVJN4VXAsa6ŠYIVŠJ7ZŠˆfršJf+ŠYIVŠJRLNŽIšwWŽRRRN–‹ŸdŽ‹Ž”™Žr’šn62xˆbHWadaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠWVZNˆWŽšWr’ŠYŸ‡jLa3H‹aršJf+ŠYIVŠJRLH‹aršJ67’XRwŽ6Mš‹ar™‹f+HKaXw“WHY64HJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršW6Gj6Ya3H‹aršJf+ŠYIVŠJRLH‹aršJ67ŠLf‹JsŸH‹aX™nasanŸyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arˆ–4ŽKWwYMJH‹ŠMšJ6˜IZšXx+x’ZI‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹adwY74HKzšŽJŸ‚H‹aLˆVN’KŸVxJš˜H‹aHAnxŽLx3Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆRGYY‰ŽxY“xY+R™ŠfŽRˆ“Š‹ˆxCNhI”whb’ŠXI+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYb“YRV8Nfar™‹f7ŠLfŽˆxKNˆWYIˆVxK6‹ˆI’fkwˆx7‹LIG–JŸh’ˆzZIf“+™Ž3X“MHJšœjKš+‹Gr–jYa4H‹aX™Rf’ŠK‰XwŽšb‹RaVJW’HYIhxJšŸYXVY–Rr’HKššwG“kNKW4Žr6‹G“ŠŠ4fk‹nfXAJf+‹LrhxWšJHWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹adwRhvšVŠWVZNˆWŽI‹6w+rŽ4rWHh“™–Ž6bYLrfxa3H‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLYf“kAnxsAJbVŠJRLH‹cMHJf+ŠYIVHsVŸNŽ“nxŽYIwfšWY’aHAn7vanIN–hNzšsILwJbxwˆIVŠJRLšGI‚šJf+ŠYIVŠJRLH‹aHf6NHXrN–Kz”H‹ŠMšJ6˜ŠGIaxsRZ’‹xrIJWsŠYŸyj‹RLH‹arIhM”’rvšŽ–WAJ‰fNY“yGšLšŽ–WAnb8x’AZj‹JW’nfra‹z6A’‹W‹ˆuWwˆh4aŽh”IXŽ–IYMˆ’RaJa‹zbI4Ž“‹ˆsW’nfzah8”ŠXŽ–wYW+‹RLH‹aršJf+ŠYI‡HsŸ8Y’a‡wnxn™GVYnbL‹RarwfszYhV“xKbZ‹f“šwh‰ŸŠYIVŠ4“ˆ‹hŽYŽ+Ž“‡4‹WaKŽZaŽfzš4Ž“‡JI+‹RLH‹aršJf+ŠYI–j’fR‹fšŠwnfzxnzvanVALrKwG–WŽ‹bVŠJRLH‹aršJf+ŠYbŽ4ŽCNˆŸ8IˆxR–Yzhxˆ“ˆYhar™‹f+šsŽHŽhWJ‹fŽ™ŠJ6˜AJbVŠJRLH‹aršJf+ŠGš–‡ˆh‚wLŽ“’ZrfNYaCšŽI3wˆŽGYLRyNY6L’ˆRKAnŽ6–Vf‹4Ž4’WI’h‰’™GN”šŽŽz’ˆŽ3IŽ“ŠYIxwˆIVŠJRLH‹aršJf+‹K6hYs64Y+adIK–4‹YIŠ‹JVbšRAWKxwš2‹R‚Hh“YjYV+IˆI‡HsVkNˆWnIna˜–YVN‹ˆbLšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYbYxYz™‹f‹ŸŽfš+Š’fVxsŽZ’ZI”IhM”’VkšYRNIŽ“YxWwŽ“JŠˆ6A+ŽVAsa6ŠYIVŠJRLH‹aršJf+ŠYIVŠWVCN‹ar™‹f’XRXwG“KNŽAWAnx+ŠY‰3Ža3H‹aršJf+ŠYIVŠJRLH‹aršWh4ŽLf2xXf˜Yf“HIKa7‹Y‰‡xJŸ‚’sadxRšYHhW‹–‹VŽY+R™ŽRxn™ŽIHŽh6‡‹Kz8‹ŽVŽŽfa–ŠJVbYŽIœjf6’4IVŠYbˆ’frHXŽ–‡ˆcW’‹Za‹zWa4Ž––fNˆHvbda‹zbw‹a6ŠYIVŠJRLH‹aršJf+ŠYIVxJœzNˆWœšK–vŽXr2–J7MHJaHKR+IˆIx–Žš’Žs‹Ÿ‹Žšn™ŽxŽ–“KŽKbY‹WaŽYf6’x’f‹ŽhaZšJW64IVŠYb‡’hœšJafNY6L’ˆRKAnŽ6IKIf‹4ŽMIŽ–JAKŽ“YG7”ŽWRMIYfWILŽf™GVWŽˆš‡WIxfR‚šJf+ŠYIVŠJRLH‹aršJf+ŠK6hYs64Y+a™wnx™GIhŠˆILHhI™wJz+ŠhxYŽh6aŽ+RdŽŽcz‹h6‹ŽŽšŠŽfšxAJf+‹fŽ’Ž’RnŽ+RYŽ‹b‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLY’aYjYVn™G6YRVˆNJ“xwJf+‹K6“ŠZIL‹’RY‹WxR™ŽRYxXfsŽ+‘W’WVŽ’fŽYxYz™‹f‹ŸŽfš+IˆI‡xfV‡ŽRŽY‹RšY‹GxaY8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf’XRXwG“KN4VY–n74ŠXr3ŠJR”Y’VLAJfR’fšŽZ“ŠŽ‹šHšfŽR™ŽxYŠZIL’ŽarAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJVCšR“‡AWc4’Kzhx4fZšsaLšJ6’K‰–ŠJVsŽfš‡’ŽŠzŠfŽN–Žš’ŽsaZšJ67ŽLf2ŠJRM’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠK6hYs64Y+a™wnx™GIhŠˆILHhI™wJz+ŠhxYŽh6aŽ+RdŽŽczŠfrŽ–ŽV‹WŽY’ŽVn’GaVŠWVZYŽ“‡nVN’YI3Ža3H‹aršJf+ŠYIVŠJRLH‹aršWh4ŽLf2xXf˜Yf“HIKa7‹Y‰VŠWVCN‹aZšWszŽfa‹x’fxŽhNŸ‹WVY‹fšŽ4ŽŽŽYbn’W‹MYhšŽGIL’ŽarAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJR”NˆWY–nxNHLŽN–hŸˆNKŸHwnV‹YIŠ‹JVCšR“‡AWcvŽXxŽJW‚HhI™wJb‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLHh“‡wnx7ŽLf2w+fCNXVHwsfs–nIš–WšŸNhNŸwf6N‹Lr2wŽ6ˆH‹aLšJ6’K‰–ŠJVsŽfš‡’ŽaŽa‹I‹–’fVŽhšH‹ŽcM’frHxŽŽLHWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIXwŽNMšR“‡I‹fxLfXw‹NWH‹aLHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ahwˆx7‹LIN–hŸˆYhIŽwhfs–dbVŠWVŸYf“H–YabaYšš–Xf”YfaZHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ahK7va’rŽ4‹MHLfr™Žr6ŠLRX–XfWY+VHwRhv™Yb‹ˆI”NˆWY–nxNHLŽN–hŸˆNKŸHwnV‹GaVHRVŸšRIŽAszrwˆIVŠJRLH‹aršJf+ŠYIVŠJRM’ZI‚šJf+ŠYIVŠJRLH‹cMaJaLwˆIVŠJRLH‹aršJf+‹L6YskvYf“‡šKVb™’r“ŽJŸ8H‹ŠMšW6ŽLŽš–WVMNX7JšJb+‹LfYsWMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYb2YsŸH‹ŠMšWIZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJk”ŽJfkIŽ–ˆAHb“HˆIyNYav‡ˆ‹Z2bbAY6y‡4“C’ˆhMwˆŽf’GVWN‹bL’ˆRXA2b“aKbyšYILšH8œh‰6ILŠ”‹4xWhJzaYV3ŠXŽ–IYMWYhaya’Žzx’‹ˆ‹MWNLRŠaŽ6Y’š’4Nˆ’nŽˆa+x+ŠJ6ŸIJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+šKWLAY68XN‚Z‹ˆYnbWaY6‚IszwnbVaZr8N2‰bwhk‚Zš23ˆŸ8Hˆ6ˆIh6‚whzrwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJkv+rhHsV˜’ˆhœIKŠ4š+a–wKzMNh“YIˆR7ŠGŽš–XfJ’+VHIfh4’GšGŽˆz4šR“dwˆaRxhŽxYa4ŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRaY‰3w4Ž–wYNWYHbˆa‹zWw+Ž–‹Mˆ’+7Ÿah8”ŽX‹W‹ˆuWanWVa4IŸN‹6ŸIJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+šn‰hHRVZNZ6‚IhMvšrhxˆczYYhWK7v–šh–WšzNŽInIYŠ4Ž’x––YzMNh“YIˆR7ŠhVHx‹f’sR‚šJf+ŠYIVŠJRLH‹aršJf+ŠKxyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹adAR66ŠY‰VŽWšJNJ“Ha‹b+‹LfYsWMHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aHIn–vNˆIŠ‹JVkNˆŸ‡nŽY™GxYs6YfakNh67HKzX–GaNf“™whkz–Ž‡–Ga’nfHjŽ6N’KV‡–hŸˆYhIŽwf“’anŸN‹ˆxh’saHIn–vNZryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠW7MN‹I8jhz‹aYš2w’hMNŽI™wsb+‹LxX–KaM’ZI‚šJf+ŠYIVŠJRLH‹cMaJaLwˆIVŠJRLH‹aršJf+™šŽwsŸdaŽfGA4šHˆz+‹RLH‹aršJf+ŠYI‡Hs7zYYWœARhz™GVYnbL‹Rar‹z’–x–‹4R+‹fŽhHfx6ŠfRYŽ‹6a‹WŽašW–MŽf6–‹4rJ’R–zNˆa8jŽ‹ŽYz7YK8zŠhWRšsxŽ–Jš7Ž’r8‹JM‹fVHŽ‹6dŽŽšYŠfR‹‹h“‹JšR‹’r‡ARŽŽIsa–‹šR‹4VRVxXVhxhsW’Jš‡‹nx’™Gš™‹ZŠMŽ+rkanŽ6™+aŽw“ŸYsAW‹fVYh“YŽhŸyšnzMAnxGR6ajfšŽ‹WšIJ8vsf3–nzkYfIkARŽsxL6šfVCŽˆfJjnŽRI+aŽxZ–MŽL6h’nR”™YŸ™ˆ“‹4akxRa‹’h“hŽhV“’’RhYŽ“7HKa2wKxˆš‹Ž‡‹RV8HLf’h6–ŽWšn–hW”HXr“xZxH‹Žx”aŽaRŽLr‹xZ“‚‹’rŽaŽNvAŽHw’RY‹Jx”IWŽHfRh–ŽVkHZ6nx‹ŸRj+Vfxsœ4ŽˆŸHwfŽN‹KŸfxsŸXNˆzœIŽ6xK6Hj’f‹šŽŽ”–fxGAsb“ŽYzdŽh‹z‹faŽ‹hVŽŽ‹š+Ys“‡NˆV6–x–‹4rJ‹f‹Wx‹fnŠfšxZ“‡‹Gfd’RVYZx–‹4rJ’RaVaJa6ŠYIVŠJRLH‹aršJ6‹K“hxJŽL‹RadNha6ŠYIVŠJRLH‹aršJf+ŠYIVŠˆŠMNŽAzws6ŸŠ’fŠ‹7MNŽAzwsb+Za+‹RLH‹aršJf+ŠYIVŠJRLH‹ahf6NHXrN–Kz”HLfr™Žr6ŠYbš–fšŸšsNŸAR6+IJbVŠJRLH‹aršJf+ŠYIVŠJRLHXawna’Lr2–XxH‹ŠM‡Jf+‹Xr“xˆz˜’RŠWšKxbŽLfX–KzˆNKfZHJf+ŠYIVŠJRLH‹adšs‰ZwˆIVŠJRLH‹aršJf+‹KbšYRVkH‹ŠMšˆR’Lš2w+f8NKW™If6ŽY‰‡xWVkšsIRAs‰ZwˆIVŠJRLH‹aršJf+‹LIhŽJ64NŽI™’R6NˆIŠ‹JVˆNJIYIY–4’LaN–JVvYf“8šfkvŽXrN–J7zYYWœARfŸšˆbXHRš6NhI8fcvInzf‹ˆ8ZH‹–œIhfyŽJb‡ˆfsIKŽG‹Y6y‹4x6IH8œh‰6’ZŠ”ŽWr8IYŽšˆŽb‹ZrfNŽš4’ˆR™ALŽfNY“rwˆIVŠJRLH‹aršJf+‹Kz2w‹ŸŸšŽ“d–R6G‹YIŠ‹JVˆNJIYIY–4’LaN–J7zYYWœARhz™Yz2w‹ŸŸšŽ“d–sb+‹KbšYRVk’saHwnVb’LffYs7MYfIxAJ67ŠXRšwG“MY’rJwnŽ’ˆIŠj‹V6YŽ“™wsŸC‹KšŽ4ŽCNXVHwsb+‹Kz2w‹ŸŸšŽ“d–R6G‹GrVxn‰LNKŸYAˆVsAˆI–j’“LaŽfGA4šHˆMWYGRLaYs”x4AZj‹JWYHb+aGrGI4ŽŠJJW’nf3ŠˆI‚šJf+ŠYIVŠJRLH‹–œIfŽ8’h7WYGRLaYs”x4Ž“‹Zcˆ’Ra8aYV+j+Ž–‹œWA‹akaKRz’’š3‡J7W’nWba‹zzxJa6ŠYIVŠJRLH‹aršˆRGYYI3ŠWV8NKW™jYŽNŠXrŽWRMH‹“4HJf+ŠYIVŠJRLH‹aršJf+ŠYI–jH‰‚LVKwnkWNKWH’a8GR7wnW“KW8aˆVMw+IxHJf+ŠYIVŠJRLH‹aršJf+ŠYI‡Hs68NZfr™‹f+‹K6hYs64Y+adIK–4‹Y‰‡–KcMšs“djh‰6™šh–ˆŠ4’nŸ8AnV7ŽLI“HsRWY’7ŸIsM4ŠLf2–f7zY’axIKRGaGrhŠˆa4H‹š4wf67‹XŽXxWŽH‹ŠM‡Jf+šRX–XfWHLfZšJkv‹K“hxJŽH‹ŠM‡J6ŽLŽš–JkWNJ“HwR6n–ryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹adAR66ŠY‰‡Hs68N4R4wKR7‹XrXxXfCNXVHwskz–nIŠŽ+rL’Y6rIJf+YYWVŠJš8Nf“d–nŽ’šˆbXwŽš˜ŽZfhK7va’rŽ4‹MHXsMAsb’ŠXI+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYbxJNMYŽar™‹f+‹LfYsŸ2HXV™IKV‹Kz2wfRYRx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆbxJNMYŽš4wfhv™Yb‹ˆxhH‹ŠM™‹fsŠYI‡ŽfLHŽIYIna7‹XŽ3ŠWV”YŽ“HRIŸšnbšYRVkHXsMAsb’ŠXI+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRL’hŸ‹W‹MHn‰Mafr8AXxšHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLšXxWšWN4a™AWc4ŠXRšwG“MY’sŸW6G’LffYs7MHJI‡n–vŽ’V™xXf”YfI™If6ŽY‰‡xWVkšsInNhkv‹K“hxJŽYRa”AJ6‹Kzš–JkWNJ“HwR6+IˆI‡Hs7zYYWœARhMInzf‹ˆ8ZH‹arIhzŸxnzkNG6MZRNwZ‘ˆ‹nzvaRf4aŽh”Š4ŽMŽZAWYGRKahfy™’ŽŠJJW’nf3ŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJ6‹Kzš–JkWNJ“HwR6+Š’fVxZr˜NX7Wšf6ŽK62–fV8HJaHW6G’LffYs7MYfIxAJf7‹LfhŽWŽM’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfwnW3ŠJš8Nf“d–nŽ’šˆbxWšCNˆŸ8IˆxŽKbGjYŠMNŽAzwskz–r3Ya3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡HsŸ8NˆŸwna8™’r“Ž4R8H‹ŠMšJ6‹Kzš–JkWNJ“HwR6nAˆŸhxˆzJYfahšs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arˆVGxK6Vx+rLHX7WIKxn™YW2–WšWYhaXaJf+™NˆH’N4aŽh”Ž4‹W‹4sˆHŽaHa’ŽzxYVGxKkWYLfZaŽkvŠ‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+IXwŽšY+7znx’K‰3Šˆaˆš+V8IŽ6™’aXj’fMHLfZšˆaIN–WšWYŽAzwsb+š6‡jYbMHWadaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠKzfxWšCHJahAna’Lš2wŽ6MYLfrIffGja‡jGILHhAŸ–Yx7ŠXRhŠˆ8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹adwY74HKzšŽJŸ‚H‹aLˆ74ŽXrXHRNMH‹Injhf+‹LrhxWšJHWadaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLNŽIššJb7ŠLfŽˆxKNfIn–Rhvšˆ‰‡j’fXNZfkNˆŠzj+aNŠ4RXš+Rœ–W“+–Yah–Gc4Ys–zNˆŠzj+aNŠ4RXš+Rœ–W“+–Yah–Gc4HWaxIh6ŸIˆI‡xˆMMYfAMAJf+‹LxšYRVCN‹IYjhb’ˆIfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”NfInhfs–nI‡x4RkšsI™wW6N’KVaŽX‘ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I‡jŽ6GxLVyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠKz2HsŸ8H‹“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfŽXxŽJW‚HXV8wŽhv™GŽwYzHLfZšJ6™’RhHs7zšsa”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠKW2–J68YŽI™wJf+šˆb2–WNMNJ“Y–sfxL6VŠWVMšsIYIsb’ŠXI+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3HsVŸYfIhšKVGxXrš–KI‚HLhŸHŽNvxKbHs6XNZfkNˆŠzj+aywc4Ys“Xaf“7šnahjLrXš+Rœ–J‰8j+aNHn–ˆYs“hNˆxŸˆb––Kb’sarˆRN‹Kz2‹ZILHhAznx’K‰YsWMHWadaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+‹LxšŽJWL‹RarˆVGxXrš–K“8N4R4jR“‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIšwh68YŽI4aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aHW6N’KšxJNMYŽar™‹fnAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠˆŠMNŽAzws6ŸŠ’fŠ‹R”N4VYjYxbŽLfN–WVMNfIŽAJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYŸ2ŽJšCHLfr™Žr6ŠYb2ŽJšC’sR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJkvw6N–hŸ4NŽaXšWr‹anIŽxY“xY+R™ŠfŽRˆIŠŽ+rLHXV™AˆR’NˆIŠj‹RœH‹x‚šJW+IJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠˆŠvYf“‡jKRG™GŽ‡j‹sŸ‹nfrˆxrXj’‘”Y+awna’Lr2–Xx3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYINŽa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI–j’fR‹fšŠwnfzxnzvaRf3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xWV8N4sŸWfN‹K“Vx+rLNXadwnV’L62xXf8NKW™jYŽNŠXr3xZr˜NX7Wšf6GaY62–fV8HJaHW6N’KšxJNMYŽa”AJf+‹Kz2w‹ŸŸšŽ“d–RxGŽXr“x4f”’sarˆ–vŽK6XwŽNMY+VJwnŽ’4I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+‹KbšYRVkH‹ŠMšJ6’KzXwfVKNŽIxI‹k4j+“KŠˆaWHhIHwn–z™YbšYRVk’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRˆ’+R‡ŽRRfŽJb‚’WIˆnI‚IhzŸŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aHwnVb’LffYs7MYfIxšWr’ŠLšXxWšWN4a™AWc4ŠXRšwG“MY’sŸwnVb’LffYs7MHJaHWfN‹K“–ŠWV8NKW™jYŽNŠXrŽWR4Hh“d–Žfbjrš–x8šŽa”šWrŸŠKfšYsŸ8’K6Hšf6GaY62–fV8HJaHwnVb’LffYs7MYfIxAsfswˆI2wfš4Nhx4šJzŸ™nAWYŽI4af63w+ŽšAYAWNHba4IŸ’’Žš‡J–WARIZaŽ6+’’Ž–‹b+’“ˆH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIhw‹šŸY+VH–YVNŠY‰‡xWšWY’a‡aYa7‹KzŠˆ8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠWVŸYf“ašWr’ŠYbš–WšŸNhNŸIˆ74’Xr3Šˆx‚šs“HIˆa˜wZš––ˆŠ4šhWaYRGj+RXxˆ“Z’nW™IKV’™GIXw’f”šRI™–sM4YKzXwYzbšŽaXAJfnAˆŸHR7WNJIŽwhfs–dbVŠˆxzN47ŸI‹6ŸIˆI‡–fVkšsIRwhfs–dbVŠWV”YŽ“HR“’4I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfwnWVŠˆI”NˆWYjfIŸšn‰hHRVZY+V™If6ŽYŸN‹JsŸ‹Rarj‹WsŠYI‡ŽfLHŽIYIna7‹XŽ3ŠWVŸYf“™Nhkv’Lš2wfV8NKŸxwf“’ZrVHa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aHWfN‹K“Vx+rLHh“‡wn–zAˆŸš–XfWšsIYIYx+šnxyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLNŽIššJb+xKz2Ys7MšŽaLW6xXršŽLaYhIn–Rf’šnx3‹ˆbLšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠ4“ˆŽYz™ŠXš3šYkWNHbŠˆhœIhf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVˆNJIYIY–4’LaN–J7zYYWœARhz™YbŽJŸŸšŽ“d–sbHK“X–f‹v’hNŸW6G’LšxWŽ‚HhIHnxxKV‡–fVkšsIRwf“’ZaVŠWV”YfI™jYŽNŠXrŽWR4H‹aHIˆxGHLa“ŽJŸ–Yf“”As‰ŸŠYI–j’“LaŽfGA4šHˆMˆHˆŽCaYs”xJzyŽWrLIYRYAJ‰GHˆœ”‹xˆšŽIxh‰’anfLwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹–œIfVRŽfŠˆHˆŽCaYs”xJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLHh“‡wn–z™YbšYRVkH‹ŠMšˆ74ŠKz2whŸ˜NhNŸW6G’LffYs7MHJaHWfN‹K“GjYx”YŽ“Hskz–aVŠWV8NKW™jYŽNŠXr‹ŽWNMN‹AŸJz+ŠYbX–fšCNˆWY–RcvInzf‹ˆ8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡Hs68N4sŸWfN‹K“Vx+rLNYŸ™IKV8™YbŽJŸˆYhIŽwJ67HKzX–’f”YŽ“Hsz+ŠXrXwfš8HWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRˆ’db“HL‘”Y“C’ˆRXKŽGHˆ‰fŽW6z’ˆh‚ws‰GNKŸWšYRk’W–ZwvbfšˆIxwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆ“Ž4RZšs“”wJ67HKzX–’f”YŽ“HRIŸšnzhw‹š4HXsMAsb’ŠXI+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVxWNvYŽIZwJ67HKzX–’f”YŽ“HRIŸšnzhw‹š4HXsMAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVxˆzbH‹aLW6xXršŽLaY’7ŸW6’šnxVx+‘ŸH‹xrAsf7AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arIhM”GšLšŽ–WAŽGNZRyŽWrv‡ˆŽŽA‹‰“Nˆœ”ŽJIkšŽIVwYŽ63ˆzyŽˆVIH8œh‰’an6fH‰b‡ˆfkh‰G‹Y6WwYx‚IYŽ“s‰6IKzfšŽŽz’ˆRXw2b“KIyNYšM‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7HKzhHRšŸNKfd–naŽKzyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfaršJf+™NWAf™aŽfz+ŽwYuˆ’dbŽaŽ6Wš’‹WA‹‹WasvaY‰+ŠX‹ˆŠJ7WA’VCa’šI’Ž“‹J‹Wa‹aa’IWŽ+ŽM–Kš+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJV8Nh“™wnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹–œIX‹JA’7WwJada’š+ŠXŽ“‹ˆœW’Ry’ŽxrI4‹WA‹‹WaG‹MaYuˆw+š–afŠWYY‹ˆaGrŸ’XŽšAYcWYKW‚ahM”Ž’ŽIY‹WaGRRaf6’YXš3‡Zš+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3ŠWV”YŽ“HRIŸšn62–fV8HXsM‡JW‹ŠGI3‹J7ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aH–nRw6–Ž+ŽKNKJŸ–nRG’Kz3ŠWV”YŽ“HRIŸšxX–KaYR–JwfIŸNZŽ‡xWVkšsInNhkv’LšxWŽYR–Jwf“’NZryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹adwnV7’KzfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRˆ’db“Nˆ6fŽJb‚šŽIA‹‰“‹nbyšYbWIŽI3wJ‰baˆWyGŽM’ˆRŠJ‰fZŽLwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYbX–fšŸšnWYjŽcvaGšhxˆzCYfaLW6xXrš‹ˆ8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfaršJf+™NWAf™aŽfz+ŽwYuˆ’dbŽaŽ6Wš’‹WA‹‹WasvaY‰+ŠX‹ˆŠJ7ˆYfaah8”IXŽ“‹J‹Wa‹aa’IWŽ+ŽM–Kš+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–nIVŠJRˆ’+V™–YabjK‰ˆaŽx8w’‹ZwKfvNKWLH‹“bAKRŠwK‰“aˆŸWaŽrbwfkœHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXfVŠJRL’h‚wZ7ZšKW4Y‹zbwhh4wnfzHnzbNY6bw+I2AnMZŽn‰MafrwJf7wGV“‹nŸ‚N’I8Asf‹wKbVNKŸWaŽrbwfkœHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠKz2HsŸ8šGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”N4VYjYxbŽLfN–XŽˆšsI8f6’ŽhŽZ“4HWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXfVŠJRL’h‚wZ7ZšKW4Y‹zbwhh4wnfzHnzbNY6bw+I2AnMZŽn‰MafrwJf7Anz‡wK‰va2‰8Asf‹wKbVNKŸWaŽrbwfkœHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹cMšJf+ŠGš–‡ˆfˆIdb“jnIWNYaCšŽI3wˆŽGYLRyNŽ“JIYWNIsu”™n6yNYaCšŽI3wˆŽGYLRyH‰8’WI2wLŽfNY“yš‹bJIYRršˆŽfšˆIfNGx‚‡ˆŽkALŽGˆ“yšŽRkIY‹Zvb“šnŸZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršW6Gj6Ya3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arˆ–vŽLfhwŽšŸY+7WIKxwn6‹ˆI”YhIn–Rf’4I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXfVŠJRL’h‚wZ7ZšKW4Y‹zbwhh4wnfzHnzbNY6bw+I2AnMZŽšˆHG6bwhh4wnfzHnzbNY6‚IXŽ‹wnJWaˆŸbwWxGV2wYIVHnŸ‚H‹“Mws6wZ7ˆ3ˆzMHŽxJf2wL‹W‹nWYX“3H‹aršJf+ŠYIVŠJRLH‹aršˆš’ŠYIVŠ4“ˆY’aYjYVyH‰8’WI2wLŽfHZxWN‹RLšYRJwvbfVWš’I”‡ˆRhwLI‚šJf+ŠYIVŠJRLH‹cMšJf+ŠGš––‹6‹‹YŽGHˆ‰yŽZškIYRJwvbfVWš’I”‡ˆRhwLI‚HJf+ŠYIVŠJRLH‹arIhM”Gš8šYŽŽA‹‰“Nˆœ”šYRk’ˆRXYŽ“ŽKfyNYa‡WIwYŽGNZRy‹4I‚‡ˆŽLšˆŽbHn6sad8WNLfraYRf’sa6ŠYIVŠJRLH‹aršJzŸ3ˆWHYŸbwRfCwYŸ‡3ˆW6HZVbAKR–wYMZNLr8aWR3H‹aršJf+ŠYIVŠJR”Yf“kIˆRNHKzN–hNMH‹ŠMšJ6˜HGIahRJ’ŽxVIsW˜xYIaŽn8ˆ’‹xRahWsxYŸyIˆ‰LH‹aršJf+ŠYIVxˆzbH‹akjKx7HXr2–WVMNfIŽwJ6ŽXxXxˆzŸYfNŸnx+ˆIŠŠJ7MNŽAzwsb+ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arˆxrXj’‘”Y+7WIKxwn6‹ˆI3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVxLa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arwXš3‡WNWaŽa‚aYVfj’ŽšGAWAfKa+x+ŠJ6ŸIJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRaŽf6x4Ž–AG7WwZRraGrŸIX‹ZIŽ‘ˆNGRaa4IŸ’’š–‹ˆcWafWaY‰zŠ’ŽMjGNWALRxa’š+ŠXAZj‹JˆHv84a‹z6ahW˜Ynz4wJ“”I’šNwnbVaˆŸbwWxA‹fˆwŽ‚3ˆz”YK6M4IvwZŠˆ3ˆ6LH‹f’sR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+šKWLAY68XN‚Z‹ˆYnbWaY6‚IszwnbVaZr8N2‰bwhk‚Zš23ˆŸ8Hˆ6ˆIh6Mwˆx7‹LIXjK‰ˆ’+ah–ˆxŸa’Ž“ŽZczNJIkIJzb’Lš2‹4f”NXV™jhMzwr2HRšZN‹“dŠfVRHYŸ–ŠY‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aKwYIzKbWY2‰8XN‚Z‹ˆYnzkw4abAhb7ZŽVIK‰ˆNXa‚AXŽNwKz3LšˆHLr‚šs“HIˆa˜wZš––KxMšsIk–Žf6aY62–Xrˆš+aYAYRGxLŽh–W‹J’+R8AnV7ŽLI“HsVd‹hŽVwhzrwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršW“xwˆIVŠJRLH‹aršJf+ŠYIVŠJRM’ZI‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹arIhM”Gš8šYŽŽA‹‰“Nˆœ”šYRk’ˆRXYŽ“ŽKfyNYa‡WIwYŽGNZRy‹4I‚‡ˆŽLšˆŽbHn6sad8WaZŽ‹aG‘všha6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹xbwK‰‹AnI3xnzka4abwnVrHJf+ŠYIVŠJRzH‹ŽdIWfNHK“2‹JR”YhIY–KRG’KzV’ˆfWILŽGˆc”ŽWRCšYŽAJu”™n6yŽˆWLIYR‡Hb“NZŽWšYRk’ˆfWILŽGˆc”ŽWRCšH8œh‰G‹7”‹4IMšŽ–ŸI2bfŽGRyŽWVˆšŽ–ZAsadR6HYIxWNvNŽI™wnaŸxnWaf“whfˆwŠZ’nŸWad‰‚IX‹ZwY6zYnbWHGVwY‰‹wZVvaˆŸˆN’IˆIhf˜wZVvaˆzMHYš8Jh4wL‘ZxnzCa2‰‚š4A4wYW33ˆzvYKšAhb2ZŽ–’šˆHG6”IŽk‚wnkˆ3ˆ‰La4abw‹8ŸAnayŽJb‚’ˆŽvA2bG‹nu”ŽWrJIˆ‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vasbVŠJRLH‹arA‹zZwˆIVŠJRLNJ“YYVwn6VxWkzNKW™–nRG™GŽVxXfKY’7ŸIY–4‹LfhŽJœMHJaHW6NYLrš–fŽMŠˆfršJf+ŠXI+‹RLH‹aršJf+ŠYI“ŽWfLHJIYIna7‹XŽ3ŠWV”Yf“ARhvŽGr3Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆxf2–ˆaLNKWY–JfRŽXxš–fšZšsI8IKV6šˆŸ‡xWV8šnW8f6’ŠLrXj‹V8Nf“d–nŽ’anŸ–ŠJRœ’‹xrAs‰ZwˆIVŠJRLH‹aršJf7–sb+‹RLH‹aršJf+ŠYI‡HRV‚NŽ“aIRr8™Y“hYRV‚HJa”aJa6ŠYIVŠJRLH‹aršJ6‹KzhwYzCYfNŸAna+Š’fVŠˆa’ZI‚šJf+ŠYIVŠJRLH‹aHW6NYLrš–fšKNJAŸjYx+Š’fVŠˆa’ZI‚šJf+ŠYIVŠJRLH‹I8w‹b7ŠLfŽˆxKNfIn–Rhvšˆ‰‡j’ffHJšœˆŽ˜xGaa–4RX’nzœˆŽ˜xGaa–4RX’nzœˆŽ˜xGaa–4RX’nzœˆŽ˜xGaa–4rM’ˆfkNW6+AZr‡Š4fMHLfZW6ŽXV“ŽJŸ8’saHIRfN‹K6“xWš˜HWa8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠ4“ˆaYR“Š4ŽMaK–WAnfˆNŽ“rAX‹ˆIGNWYHbCa4IŸ’’ŽšŽkWYŽIVa‹Mv34‹W‹ˆuWaZRˆ‹Wšsw‹ZAKŸzaš‚IX‹ZwY6zŽ‹bVŠJRLH‹aršJf+ŠYIVŠJRLHhIHwnxbwn6ŽXfMNJar™‹f+‹LxšYRVCN‹IYjfI˜xKxyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arW6ŽXV“ŽJŸ8Y+adIKa‹YIŠ‹JR”NfIn–RhvnzX–GaŸYRx4HJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠ4“ˆaGRyŠ’ŽvŽJMWaLŽˆaŽh”XŽMj‹kWAhbkaGrŸHXŽ2j‹sWwˆh4a4IŸ’’Ž“N‹–WA+šXaGV3+ŽMj‹kWNLfraY‰6–4ŽšŽkWNLfraŽ6+IXŽ–w‹z+‹RLH‹aršJf+ŠYIVŠJRLH‹aHjKŽN’YIŠ‹JV˜šs“‡–n7vjšh–fšŸHJ“dwˆan™’R2w‹šJYfaLwKaŸNZr3Ža3H‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3HsœMNˆŸdIKaŸšˆbX–ˆz˜’sarwKŠvwŽx4h4NZfXARr‹–+faŠˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJV8š‹IYhb+šŽYRV˜šsIn–sf+–GŽšY“bNŽAWˆ–4‹LfVŠˆaWHhIHwnxbwn6ŽXfZNXa‡–sz+ŠYb2–WNMNJ“Y–sz+ŠYbXwŽNMšR“‡IŽc4YK“XY8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLYfIœjf6NAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfŽXxŽJW‚HX7Wwnx7’XršYRRL’RAWnššfYsRLHLhJW6ŽXV“ŽJŸ8Y+adIKa‹GaVŠWVˆšR“HIˆxN‹GaVŠWVŸYf“H–YabaYšhw‹šŸHWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹arIhM”Ž4“L’WIxA2bfAL7”ŽWr‚jY6”I‹fswˆf3jKbˆN2‰wsbL–‹Ÿ‹Ž’sWaLŽˆaŽh”XAZj‹Jˆ’dbafff’’Ž––2uWaŽa‚a‹zŸš4ššŠW–ˆ’db7aG‘vw+‹WA‹‹WaLŽˆaŽh”hbf‡4“C’ˆh‚wLŽ“’ZrfN‹66‡ˆRXIGŽbNˆIyYWLšH8œh‰63ˆŸWN‹‰MšYR‚wˆŽ“’nœ”ŽW6z’W–JKŽbNˆIyYWL‹Y‰LH‹aršJf+ŠYIVŠJRLH‹adAR66ŠY‰V‹WVˆšR“HIˆxN‹GrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIhŽ4Ž˜Yf“xwJ6™’RhHs7zšsaZšJ67HKzhHRšŸNKMŸ–ffNHGryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xWV8šnW8f6N’’fX–WVkšsI8h‰CAnbYR6MY’VYjhb+4I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚Y’7Ÿ–YV‹Y‰‡xWV8šnW8f6N’GrŠŽ+rœHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYbš–XfWNKMŸW6NYLrš–fŽL‹RadwnŽ7ŠLa2–fV8HJaKILšVšˆŸ–ŠJR”YhIY–KRG’KzX–GaZYRa”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xJŸˆNKJWšf6ŽXV“ŽJŸ8H‹ŠMšJ6’Lš2w’ŽKYhIY–KRG’KzGjhVh’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLYfIœjf6NAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”Y’7ŸIYV8™YbYR6MY’VŽšWr’ŠYbxWNvNŽI™wRcvwIyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xJŸJYhar™‹f+šn“xJfL’R“ašJf6NZŽ‡xJŸˆNKJWšf6ŽXV“ŽJŸ8’nfX‹f7‹K6XxˆzZH‹aXI‹6‹KzhwYzCYfNŸIˆ74HXryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIYn“8YGfLWhv–Yb–ŠJR”NXaY–na7ŽXr–ŠJR”NˆWY–nxNHLŽN–W6kNˆf”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršˆxGaG6YRR‚HhAŸ–Yx7ŠXRhŠZI”NˆWY–nxNHLŽN–W6kNˆf”aJaLwˆIVŠJRLH‹aršJf+ŠYIVŠJRˆ’db63ˆŸWN‹‰MšŽ–JšJ‰“Aˆ‰ŽwRsˆH4N”aYR’Hsa6ŠYIVŠJRLH‹aršJf+ŠYIVxWNJYfIawJkvxKbš‹VCNX7WIŽ6G’XrVŠJf’nfHW6NYLrš–fšKNŽ“rI‹6ŸHYŸ–ŠJR”NXaY–na7ŽXr–ŠJR”NˆWY–nxNHLŽN–W6kNˆf”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVHRšWN4VY–sb+‹LšhYRVZšR“xAJ67HKzhHRšŸNKMŸ–ffNHGryIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJ7zNKŸ™wnx+šˆb2ŽJNMY’VkwnaŸ4I+šˆ‰LH‹aršJf+ŠYIVxWNJYfIawJkvxKbš‹VCNX7WIŽ6G’XrVŠJf’nfHW6NYLrš–fŽWHLfVwhz+ŠYb2–WNMNJ“Y–sz+ŠYbXwŽNMšR“‡IŽc4YK“XY8ZŠˆfršJf+ŠYIVŠJRLNŽIššJb+‹LfYR7zNˆJWšKxbxLfŠŽ+‘Ÿ’‹arw‹66ŠL6hHs6ZNXaawˆx7HLr2‹ˆI”NXaY–na7ŽXrGjhVhHWaZšJkvxLaXwŽškYh“”whb‹–+fŠŽsRMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYbhxˆ“MNZhM‡Wcv‹KzhwYzCYfar™‹f+‹KbYR6MY’VŽaJa6ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJfŽLaX–fNZŠˆfršJf+ŠYIVŠJRLH‹aršJf+‹LxX–KaL‹RarwXš–‡ˆ‹Ww4š8ah8ˆ‡4Ž“‹JcWNŽaœahz’w+AZj‹JˆHv84aGRyŠ’ŽM‡ˆzšŽWV6aGr6IXŽŠˆJWYhaˆaŽfzw4ŠJŠJ7ˆH4N”aYR’H+ŽMGNWYhabaŽ6+IXŽšAYuWwˆfGahf+xXš3a28WNŽa7aŽ6+’X‹ˆšGAWAnfˆaŽ6+w’Žz–KkWahIWa4IŸšh6˜AJbVŠJRLH‹aršJf+ŠYIVŠJRLNŽIššJb+xKz2Ys7MšŽaLˆ74ŽXrXHRNMHWa8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arˆVN’KŸVŠ4ŠŸH‹I8InajšxWŽ‚HY64šJf6IˆI‡x4hzšs“d–Yx+4I+‹RLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYI“ŽWfLHJaHW6NYLrš–fš˜‹R“™–RfN‹LršjKuˆYhIY–KRG’KzXjYIMHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aHIn–vNˆI–XrLH28”™n6yŽ4f”‡WI‡KŽ“KIyN’R6‡WIVAJ‰fNY“yGŽˆIŽI”db“Nˆff‡4“bYaWNŽAzIˆV™Yb‹ˆI6a+x+Šhf+HGaVŠWV”Yf“ARhvŽL63Ža3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠWVJN4VXšJzC–nI‡‡J‰ršˆWHwnxbwn6šYfkA‹‰fZŽWGŽˆIY‹ŸALŽG‹7”šŽŽz’v8œw’7ŸwŽ6bjr2wŽ“MwhfswYuJxnWaf“6šJ6˜wZVvaˆŸˆN’I6šJ6ZIRrWHJR’WAœšJ‰G‹nbf‹RkšYWrYŽbŽfHJRŠ4‘”an‰+NWšY’h–ˆ’sasah8”ŽXx‚ŠˆŠWAnfˆaŽ6+w’Ž2j‹sWYhaˆa+x+ŠJ6˜AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+‹LxX–KaL’nkMšJk”ŽˆWLIYRfwh‰63ˆWyNGf‚šYRXYŽ’aŽW‹4f‚’ˆŽ“s‰“HKh”NYaWIŽIxA2bGHZRyšGVv‡WIŠwv8”™n6yGšJ‡ˆR‡Adb6n6yŽWVˆšŽ–ZAsu”™nW6HK“xJfL’R“aš4Ž––KAWwJ‰˜ahM”š’Ž‚aKMWaGRRah8ˆ‡4Ž“‹JcWYha™a’šfIJf7‹K6XxˆzZH‹xŽ–‹Ÿ‹ŽYhJasa+HL64HJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹adwnV7’KzfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡x4R˜YLfrIŽr’ŠYœZaZfaaY7vŽ+Žšw‹œWAfzaGRyŠ’ŽvŽJMWYYfZah8ˆ‡4Ž“‹JcJasa+HL64HJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹ad–nR7HLšhj‹VWYf“XšWVNn6Ys7MNŽAŸI‹b+‹LxX–KaM’ZI‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’ˆfyIdbG‹nzWŽ4f”‡WI‡KŽ“‹nbW‹4IJIYŽ“s‰fHKfyNYav’WIŠII‚šJf+ŠYIVŠˆ‰L‹‹“‡wnx7ŽLf2‹V˜šs“‡AnVbNJbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹V˜šsIn–nRG’YIwfšWY’aHAn7vanIhwŽšŸN4V8IKV6šZrfIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠL6hxJNMNŽIaah‰6‹XVYs6˜NŽAŸI‹‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰LahM”Ž’ŽIY‹WNXV‹aGrf–X‹W‹4sˆHŽaHa‹z6I+Ž‚w‹sWAf‡aŽh”IXš3a2uˆYKŽWa’Žzx’š3a28WNŽa7ah8ˆ‡4‹Z–L‹Jasa+afkvYXŽ‚ŠJ7WAnsWaGVyŽXAZj‹JW’nf™af6ŸŠ’š3N‹7WN’šfa‹Mˆ’+ŽšjŽAW’nWKaŽh”IXŽ–IYMˆ’sasa’Ž’wJa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHh“djYRGa’rVHsœMNˆW8IŽ6ŸxnzMwJzbwLr˜AnŸVxn‰MwJ“A’xˆwn62‹nW6Yfr8KVswL‹W‹nWA6ˆIhf˜wnkˆ3ˆbˆHJxbAKR‹wnkJ’nW8NhxˆIhfœIˆabwŽhxˆV”I‹zvwLšHr‚Nf“”I‹84wY‰–jKzˆHH‰8h62wZšM‹nzkaZVˆIhfœIˆabwŽhHsz”I‹zvwnb2–ˆbWafxAGrKwnkˆ‹nbWH4abwJz˜wšV3ˆzCHKV‚ILrŠwncZwJbVŠJRLH‹arA‹fRŠLfYR7zNˆJJšWfNHLfšYnb3H‹aršJf+ŠGR3’“3H‹aršJf7ŠXRšwG“MYGfdjKxxXr“ŽJWLYKŸYIŽh4‹Lr2–XxLYhIY–KRG’KzXjYI”NJ“‡AnV‹’f‡jYaMšGI‚šJf+ŠYIVŠJRLH‹IYaR6G’Y‰‡–hš”YYfdW6NYLrš–fš˜HLfZšJ6™’RhHs7zšsaZšJ67HKzhHRšŸNKMŸ–ffNHGryIˆ‰LH‹aršJf+ŠYIVxˆzbH‹aLˆabŽXrhYs6WY+ana6x’fŠŽsRMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚YfAzIˆx7ˆ‰‡x4hzšs“d–Yx+ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIhxˆ“ŸNXaXšˆVbŽXaVxŽNJY’VYIˆxwš2YIah8”–4Žz’JsWAdb8aGr6IXŽŠˆJWN’š‡ahbyxffG‹KhWYhbaaY7vŽ+Žšw‹œˆ’dbxahb’ŽŽRRsWaGRRa’Ž’w4Ž‚’–WAnfˆaŽ6+w’ŽšŽ4–WAf‡aY‰bwXš3xJWYn“8YHbG‹Lšf‹4IM’ˆŽ“s‰“šnA”wŽ6”’v8œwLfXAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLH‹aršJfŽLaX–fNZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJ7MN‹“‡IKxŸŠLŽYnaL‹f“kf6NŠXr“Ž4fWHJI8InajšxWŽ‚HY64šJf6IˆI‡x4hzšs“d–Yx+ZryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJf+‹La“YsœMH‹ŠMšWAz–+I+‹RLH‹aršJf+ŠYIw’fŸYfInKR+ŠY‰‡x4hzšs“d–Yx+ŠK“Xj‹R”N’VYa‹fs–dbVŠW7vYŽIœ–Ž6’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆb“–fNW‹RŠMIJbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf’Lš2wfVMNKŸYws‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLH‹aršJfwnWVŠˆcMNˆW8Isb+‹XVšŽZczYfa”Rr’NˆŸ3Ya3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠW7vYŽIœ–Ž6’Š’fVHsVŸYfIhšK–4ŠLa“YRR‚HLhŸNˆaŸAZš‡jGILHh“nV7ŽKz3Ža3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠWV4NŽ“™–RAz–nIŠ‹JR”šnWnAˆxGŽKVaxXrWH28”™nf+NZŽ‡HR6kNh“YwRI˜xKx–YšˆIhf”wh‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹I8w‹f+šˆbXHs6MNKŸx™Žr’šIXwYzWšsIšwhbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLN4aHnxwn6yLrZNˆW8IYxn™Gf3ŠWV4NŽ“™–sb‹AJbVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIŽZ“˜YfadAR66ŠY‰‡HsVŸNŽAW–Rr‹–nŸXHs6MNKŸHj‹6Ÿw+I+‹RLH‹aršJf+ŠYIVŠJRLH‹“djYRGa’rN–Jf‚HhIœAn–4‹GryIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJVŸYf“H–YabanI‡xZ“MN4axaJa6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹xbw4xswYœˆYnbWH‹x”I‹bvwˆf‚’nŸLAKŸbw‹8‚wnb3NKzCHŽ“8JbˆwY6VšKzvAVwY‰‹waaˆWLHˆš8XxvwnI–IJbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆVb™YbŽXhJNfIZšˆ–4‹Lf“Ž4ŽH‹‰’anIy‹4xzIYf3šZŽfŠZŽfšYRkxK“™ŽsR‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠWVkšs“Hj‹fxLfXw‹NWH‹‰G’Y“fŽWRz‡WIœwLŽ“ŠG‘”ŽWr6IŽInIŽGŠGšy‡4“C’WIŠA2b’™n‰yŽJšM‹ZV”If6˜ZŽ–ALrLHLVMRh4wLV3Y‹bVŠJRLH‹arA‹fRŠLfYR7zNˆJJšWfb™Gš2xWškNKfswV‚jKW6HhxMRh4wLš“aˆW6Y‹xbwhfwL‹WwKzvAVwY‰‹waaˆWLHˆš8Xxvwn“2NKzL’6bwsz2wZNWŽnzba’‹MNˆŸYw+AZj‹JWYhabaŽf6YXš–‡W‹WYLŽfYKWnAˆ–vŽ‹bVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹V˜šsIn–nRG’YIwfšWY’aHAn7vanIN–Kz˜Y+7znx’K‰N–hNMšs“VwJ6aGšxWšKš‹AzAJz+ŠYbšYR7MNˆf”HJf+ŠYIVHa3H‹aršJf+ŠYIVŠJVbNXa‡wRfG’K‰VŠˆI”YŽ“H–na6ŠK“Xj‹R”N’VYa‹fs–dbVŠW7vYŽIœ–Ž6’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aH–ffGj+R‹JsŸH‹“™–na8™GfYsV4YŽI™wsb+šnaNŠˆa4H‹ahNW“njna‡jGILHh“nV7ŽKz3Ža3H‹aršJf+ŠYIVŠJRLH‹aršJ67YK“2HRš8H‹ŠMšˆ–4‹LfN–J68NJIœRhvŽY‰‡j’“’sarwf“+™nŸ–ŠJR”šnWnAˆxGŽGryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arˆxbxLahŽWŽL‹RadjKx7HKšXwŽšZNhInf6’šˆŸŠjYa4H‹ahNWrŸNZaVŠW7vYŽIœ–Ž6’4I+‹RLH‹aršJf+ŠYIVŠJRLH‹aH–ffGj+R‹JsŸH‹“™–na8™GfYsV4YŽI™wsb+NZŽ‡jGILHXRZI‹6ŸIˆI‡HR6kNh“Ywsb‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLHh“nV7ŽKzVx+rLN4aHjŽc4HKzXxZ“kY’VŽwJ6ŸšˆŸ–ŠJRYsaLwhz+ŠYbhw‹š4šRIŽAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJR”šnWnAˆxGŽYIŠ‹JV˜šs“‡šKabŽLI2xJšCYfaLwhb’NZaVŠˆxXHWaXAJf+‹XVšŽZczYfa”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠW7vYŽIœ–Ž6’Š’fVHsœMNˆMŸjŽ6NŠLašŽJŸ8HJaXAh6ŸIˆI‡–GIvHLfZšJ67YK“2HRš8HWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYI‡HR6kNh“Ywsfs–nIX–WVŸY+a‡wnajn“š–fŽ‚HXR4whz+ŠYŸNxLa’sarˆxbxLahŽWŽM’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYbhw‹š4šRIŽšWr’ŠL6hHs6KNˆWYIˆVxK6‹ˆIYnfXAJf+šnaNYa4H‹aH–ffGj+R‹ˆ8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+‹XVšŽZczYfar™‹f7’XrXw+fŸYf“dAWfG’Kz3ŠˆŠZHLfZšJkzj+I‡jGILHh“nV7ŽKz3Ža3H‹aršJf+ŠYIVŠJRLH‹aršJ67YK“2HRš8H‹ŠMšˆ–4‹LfN–J68NJIœRhvŽY‰‡–ZI’sarwf“7IˆŸ–ŠJR”šnWnAˆxGŽGryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arˆxbxLahŽWŽL‹RadjKx7HKšXwŽšZNhInf6’šˆŸ3Ya4H‹aXI‹bC™nŸ–ŠJR”šnWnAˆxGŽGryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹adAR66ŠY‰VYsVŸYfIhšKVGxXrš–KI‚HLhœwhz6‹LVYnbWHLkM‹6Ÿanbhw‹š4šRIŽI‹6ŸHGš“‹ˆa4H‹aHIY7v‹KzN–ˆ“JNhaZšJ67‹Kz2YsRMHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹VbYŽIœjf6‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLšs“‡–Ž6‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰6’ZŠ”ŽWr8IYRadbGIYWbHLšhŽ4Ž”NvbGŠGšy‹4x6IYRGIŽaCwY6VwKz4YH‰8IŽ6NwYW–aˆŸM’V”Ifh4wLš“aˆŸHGaMa’Žzx’šVA‹–Was8WŠˆfršJf+ŠYI3‹V6NXaYIŽ67‹nzCHŽ“8JbˆZŽVxnbWHZV‚Y‰–wKIvwKŸbwWx8I+š2ZŽVAK‰Ma‹z8wf6swY‰VšKz”wZ68XIŠZŽVIK‰Ma‹z8wf6swY‰VNJbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆŽsxYI“Ž4‹MYfIhwna6xnzJaKV”I‹fvwZ‘W’nzYhxbwJfKwKW‚‹fhˆ’+7MŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡HnbœH‹I8IYxŽKŸYsfLaYVfw’Ž–‹8ˆHˆŽ’aŽkv‹’ŽzŠJcWaGRRŽˆŽ6™GxrwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHasW6ŠLr2wfV8YXVYj‹fyŽWr4‡W–JHb6wKbWŽˆx”’ˆRLdbfNY“nK‰ˆNfR3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbfŽsfLNŽAW–R6GšnzX‹x8XIŠZŽVIK‰Ma‹z8wf6swY‰VšKŸbwWVahMv–sa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHh“YARI–GaVHsœMNˆW8IŽ6ŸŠXR“ŽKxMYhIhwnx7‹nzka4abwnVswZNWŽnzba’IwY‰HYŽxŽIJbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆ7vYKWX–fNMŽJadAnV‹Kz–fšŸH‹‰fNLVWNYIk‡ˆf3šZŽfŠZŽfšYRk’WA4AŽ6‡ZŽf‹4xCIYRadbGIYWW‹bLIYŽ+IYŽfNY“yŽ4aMIYh”IYŽGILŽfNGš8’v8œh‰“IZxyŽ4Ž4‡ˆRGIYŽG‹YbfšYRk’WIWIYŽG–ZVW‹WL‡WI2Is‰yŠYIWw’Ib’ˆfWAs‰’aŽCxšˆHG6‚wˆRCwLr–AKzJaKV‚ILVwnŸxnW‚HYšMwhfswZr‚HnzvaˆŸMIf6swšMšKbWH‹xbA‹b7ZŽVxnW‚’na3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbfŽh6kNKWhwsfwŽhxWšYf“Vš4‹WIG‹WA‹a7ahfzŠ4‹JH4‹WaGRRa‹z6H4š–aX‹W’nfyaY‰ŸH+Ž“aKsˆHGR+a’x3a’‹WA‹‹WNLRYahMˆa’Ž“‡4‹WAHbŽa4IŸ’’Žah–WaG‹MaGr“a’ŽŠW7WaGRRaG‘”w+Ž‚wH8ˆHGfsaŽ6W–+ŠJŠJ–ˆNLŽšah8ˆ4Ž–’ša’v8œh‰6RyšYbWIŽ–JKŽbYKbyŽ4šMIYh4wKŽfwGŽZwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHnx7‹LfVxJšŸNˆWna‹fyŽJWkšŽIxAHbGjnŸWN‹RM‡WIŠGŽGxLxWŽJRˆ’v8œh‰G‹7”‹4“‚’WInARavZšjKbW’VMšJ6vAn“š–ˆŸvHWf3H‹aršJf+ŠGRVx‹VŸYf“H–YabanIšYs6ŸYŽ“”š4š–‡W‹WYLŽfa’šŸw’ŽŠJhWA+Vka‹zW–X‹WA‹‹ˆHGR+a’x3a’Ž“‡4‹ˆ’sIkŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹VWNXVHwn–MxKf2–W68‹YJŸ–YVb‹L63ŠW7J’ŽaZšJ67Z“–ŠJR”š‹xVAJf+‹XŽaGILHh“YARI–Ga–ŠJR”NXVwY–vŽXrGx+rZ’sarˆŽYHK“2wYx8‹RxrAJfxLfXw‹NWH‹aHnx7‹LfŠŽLxhHWR‚šJf+ŠYIfIˆ‰LH‹aršJf+ŠYIVxˆzbHJ“djŽ6Gšnš2ŽJNMY’VkšffGja3Šˆaˆ‹sšJšŽr8–VŠ–h6ˆšRAWˆa˜–nfNxLa‚YsIxAhb’Iˆ‰NxWRvHWšœšR“nAˆ‰NxWRvHWaZwW“‹GV3ŽL“hHYzJšŽr8–RŠjXxˆNŽaXAJf+‹XR“ŽK“JNhaZšJ6–Y“hxJŸ‚Yf“aAJfnŠfaHŽYxKŽ’rYŽŽcM™ŽaHxŽš’HWa8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠWV8NhIYIR6Ga’rXj‹sŸH‹šJšs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJVbNXa‡wRfG’K‰VŠˆI”NfIn–RhvnzXj‹VkNZfrˆRN‹Kz2‹ˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwJ6w+rŽ4R2’ŽNM‡Wr’‹Xxa‹4r”NXVwY–vŽXrGŠJRbHKfrˆRN‹Kz2ŽLaœYRxZ™‹67šZ“3jŽVˆYKWjf6N‹ffVŠWfbH‹aHAnxŽLxGjh6h‹saHa‹W6w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLNŽIššJb+‹XŽŽw‹šWYXVŽ‡JW+w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+™NWaGŽWaGR+H+šVA‹–Was8Wa’Žzx’Ž2AŽNˆ’+NWa‹z6’4Ž‚j‹cWN’š“ahfzŠ4‹JH4‹WaGRRa‹z6H4š–aX‹WNH8WaGs”Ž‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆb“YRV8Nfš4–R“’Š’“VŠW7W’Ž–MˆŽYHK“2wYx8HW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf’Lš2wfVMNKŸYws‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆ“X–WVkšsI8h‰CAnš“YsŸKNfIn–RhvnššYR7MNˆfLˆRN‹Kz2ŽLaZYRaZWfN‹XrXYbMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVCNX7W–nRGa’RŽa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI–jH‰8LVˆAnW“Žnz”wZ6bhfKwVMAKŸbwWV6NXaYIŽ67‹nbWH‹xbwJzKwKW‚‹‹bVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwJ6w+rŽ4R2’ŽNM™Žr’‹Xxa‹JRbHKfrˆRN‹Kz2ŽLaŸYRŠM™‹67Z“VŠWfbH‹aHAnxŽLxGjhŸh‹RŠMˆŽsHYI‡ŽfLHhI8–R6G–YV™xX‘Ÿ‹RaHa‹W6w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf’Lš2wfVMNKŸYws‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arW6Gjnz2ŽWšWšs“™Nf“’Š’fVx4Ž8šfdaYRGj+RXxˆ“ZY+VnWf8™Yz2xWšJYfAW–sb+‹LrhxWšJŽZ6dšsz+ŠYbhxˆ“MNZf”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aHwnVŽLxŽ4‹MNZ64HJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršW6Gj6Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹šJšs‰ZwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰6’ZŠ”ŽWr8IYRadbGIYWbHLšhŽ4Ž”NvbGŠGšy‹4x6‡ˆRGIŽaCwY6VwKz4YH‰8IŽ6NwYW–aˆŸM’V”Ifh4wLš“aˆŸHGaMa’Žzx’šVA‹–Was8WŠˆfršJf+ŠYI3‹V6NXaYIŽ67‹nzCHŽ“8JbˆZŽVxnbWHZV‚Y‰–wKIvwKŸbwWx8I+š2ZŽVAK‰Ma‹z8wf6swY‰VšKz”wZ68XIŠZŽVIK‰Ma‹z8wf6swY‰VNJbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆŽsxYI“Ž4‹MYfIhwna6xnzJaKV”I‹fvwZ‘W’nzYhxbwJfKwKW‚‹fhˆ’+7MŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡HnbœH‹I8IYxŽKŸYsfLaYVfw’Ž–‹8ˆHˆŽ’aŽkv‹’ŽzŠJcWaGRRŽˆŽ6™GxrwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHasW6ŠLr2wfV8YXVYj‹fyŽWr4‡W–JHb6wKbWŽˆx”’ˆRLdbfNY“nK‰ˆNfR3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbfŽsfLNŽAW–R6GšnzX‹x8XIŠZŽVIK‰Ma‹z8wf6swY‰VšKŸbwWVahMv–sa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHh“YARI–GaVHsœMNˆW8IŽ6ŸŠXR“ŽKxMYhIhwnx7‹nzka4abwnVswZNWŽnzba’IwY‰HYŽxŽIJbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆ7vYKWX–fNMŽJadAnV‹Kz–fšŸH‹‰fNLVWNYIk‡ˆf3šZŽfŠZŽfšYRk’WA4AŽ6‡ZŽf‹4xCIYRadbGIYWW‹bLIYŽ+IYŽfNY“yŽ4aMIYh”IYŽGILŽfNGš8’v8œh‰“IZxyŽ4Ž4‡ˆRGIYŽG‹YbfšYRk’WIWIYŽG–ZVW‹WL‡WI2Is‰yŠYIWw’Ib’ˆfWAs‰’aŽCxšˆHG6‚wˆRCwLr–AKzJaKV‚ILVwnŸxnW‚HYšMwhfswZr‚HnzvaˆŸMIf6swšMšKbWH‹xbA‹b7ZŽVxnW‚’na3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbfŽh6kNKWhwsfwŽhxWšYf“Vš4‹WIG‹WA‹a7ahfzŠ4‹JH4‹WaGRRaYVzŽXš–aX‹W’nfyaY‰ŸH+Ž“aKsˆHGR+a’x3a’‹WA‹‹W’nf3ahMˆa’Ž“‡4‹WAHbŽa4IŸ’’Žah–WaG‹MaGr“a’ŽŠW7WaGRRaG‘”w+Ž‚wH8ˆHGfsaŽ6W–+ŠJŠJ–ˆNLŽšah8ˆ4Ž–’ša’v8œh‰6RyšYbWIŽ–JKŽbYKbyŽ4šMIYh4wKŽfwGŽZwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHnx7‹LfVxJšŸNˆWna‹fyŽJWkšŽIxAHbGjnŸWN‹RM‡WIŠGŽGxLxWŽJRˆ’v8œh‰G‹7”‹4“‚’WInARavZšjKbW’VMšJ6vAn“š–ˆŸvHWf3H‹aršJf+ŠGRVx‹VŸYf“H–YabanIšYs6ŸYŽ“”š4š–‡W‹WYLŽfa’šŸw’ŽŠJhWA+Vka‹zW–X‹WA‹‹ˆHGR+a’x3a’Ž“‡4‹ˆ’sIkŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹VWNXVHwn–MHKz2x4h4‹YJŸ–YVb‹L63ŠW7J’ŽaZšJ67Z“–ŠJR”š‹xVAJf+‹XŽaGILHh“YARI–Ga–ŠJR”NXVwY–vŽXrGx+rZ’sarˆŽYHK“2wYx8‹RxrAJfxLfXw‹NWH‹aHnx7‹LfŠŽLxhHWR‚šJf+ŠYIfIˆ‰LH‹aršJf+ŠYIVxˆzbHJ“djŽ6Gšnš2ŽJNMY’VkšffGja3Šˆaˆ‹sšJšŽr8–VŠ–h6ˆšRAWˆa˜–nfNxLa‚YsIxAhb’Iˆ‰NxWRvHWšœšR“nAˆ‰NxWRvHWaZwW“‹GV3ŽL“hHYzJšŽr8–RŠjXxˆNŽaXAJf+‹XR“ŽK“JNhaZšJ6–Y“hxJŸ‚Yf“aAJfnŠfaHŽYxKŽ’rYŽŽcM™ŽaHxŽš’HWa8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠWV8NhIYIR6Ga’rXj‹sŸH‹šJšs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJVbNXa‡wRfG’K‰VŠˆI”NfIn–RhvnzXj‹VkNZfrˆRN‹Kz2‹ˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwJ6w+rŽ4R2’ŽNM‡Wr’‹Xxa‹4r”NXVwY–vŽXrGŠJRbHKfrˆRN‹Kz2ŽLaœYRxZ™‹67šZ“3jŽVˆYKWjf6N‹ffVŠWfbH‹aHAnxŽLxGjfVh‹nfHa‹W’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLNŽIššJb+‹XŽŽw‹šWYXVŽ‡JW+w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+™NWaGŽWaGR+H+šVA‹–Was8Wa’Žzx’Ž–‹8ˆ’+NWa‹z6’4Ž‚j‹cWN’š“ahfzŠ4‹JH4‹WaGRRaYVzŽXš–aX‹WNH8WaGs”Ž‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆb“YRV8Nfš4jŽ“’ŠHbVŠW7W’Yf4ˆŽYHK“2wYx8HW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf’Lš2wfVMNKŸYws‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆ“X–WVkšsI8h‰CAnš“YsŸKNfIn–RhvnššYR7MNˆfLˆRN‹Kz2ŽLaZYRaZWfN‹XrXYbMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVCNX7W–nRGa’RŽa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI–jH‰8LVˆAnW“Žnz”wZ6bhfKwVMAKŸbwWV6NXaYIŽ67‹nbWH‹xbwJzKwKW‚‹‹bVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwJ6w+rŽ4R2’ŽNM™Žr’‹Xxa‹JRbHKfrˆRN‹Kz2ŽLaŸYRŠM™‹67Z“VŠWfbH‹aHAnxŽLxGjhŸh‹RŠMˆŽsHYI‡ŽfLHhI8–R6G–YV™xX‘Ÿ‹RaHa‹W6w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf’Lš2wfVMNKŸYws‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arW6Gjnz2ŽWšWšs“™Nf“’Š’fVx4Ž8šfdaYRGj+RXxˆ“ZY+VnWf8™Yz2xWšJYfAW–sb+‹LrhxWšJŽZ6dšsz+ŠYbhxˆ“MNZf”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aHwnVŽLxŽ4‹MNZ64HJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršW6Gj6Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹šJšs‰ZwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰6’ZŠ”ŽWr8IYRadbGIYWbHLšhŽ4Ž”NvbGŠGšyŽ4aMIYh”IŽaCwY6VwKz4YH‰8IŽ6NwYW–aˆŸM’V”Ifh4wLš“aˆŸHGaMa’Žzx’šVA‹–Was8WŠˆfršJf+ŠYI3‹V6NXaYIŽ67‹nzCHŽ“8JbˆZŽVxnbWHZV‚Y‰–wKIvwKŸbwWx8I+š2ZŽVAK‰Ma‹z8wf6swY‰VšKz”wZ68XIŠZŽVIK‰Ma‹z8wf6swY‰VNJbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆŽsxYI“Ž4‹MYfIhwna6xnzJaKV”I‹fvwZ‘W’nzYhxbwJfKwKW‚‹fhˆ’+7MŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡HnbœH‹I8IYxŽKŸYsfLaYVfw’Ž–‹8ˆHˆŽ’aŽkv‹’ŽzŠJcWaGRRŽˆŽ6™GxrwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHasW6ŠLr2wfV8YXVYj‹fyŽWr4‡W–JHb6wKbWŽˆx”’ˆRLdbfNY“nK‰ˆNfR3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbfŽsfLNŽAW–R6GšnzX‹x8XIŠZŽVIK‰Ma‹z8wf6swY‰VšKŸbwWVahMv–sa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHh“YARI–GaVHsœMNˆW8IŽ6ŸŠXR“ŽKxMYhIhwnx7‹nzka4abwnVswZNWŽnzba’IwY‰HYŽxŽIJbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆŽnHK“2wYx8H‹I8IYxŽKŸYsfLa’ŽWI’ŽzŠJcˆHGR+a’x3a’‹WA‹‹WNKŽbahMˆa’Ž–‹uWwZf7aYsˆN’šVA‹–Was8Wa’Žzx’Žš‡Zkˆ’+NWaYs”a’Žz‡W‹ZaZfaaGV+–+Ž2wGkWAnsWaŽ6+‹X‹WA‹‹WAdb8aY‰b‡4šVj‹ŠWYL‹Ma+x+Š4š2IŽhˆH4š”a‹z6ahWy‡4“C’ˆfkA‹‰fZŽW‹4xCšYWJ‰GaLrW’ašYŽbIGI‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠWVˆYKWjf6N‹f6VxˆzWšsIYwf6NHYAWaGŽWaGR+H+šVA‹–Was8Wa’Žzx’Ž–‹8ˆ’+NWa‹z6’4Ž‚j‹cWN’š“ahfzŠ4‹JH4‹WaGRRa‹z6H4š–aX‹WNH8WaGs”Ž’AZj‹JWYXš+a’ŽW–+ŽMN’‹WYhaHa’Žzx’Ž“aX‹WNKŽWahfŸx+ŽI’‘Jasa+aKVWY’š3aK8W’nhˆ’‹u”™n6yY“z’ˆŽ”IGŽ’anfWHbWšŽIhJ‰“šˆc”wYaL’ˆfbšˆŽGILŽfw’f”’WA”wdb’anIyNY‰‚šŽ–JšJ‰“šZxZwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHnx7‹LfVxJšŸNˆWna‹fyŽJWkšŽIxAHbGjnŸWN‹RM‡WIŠGŽGxLxWŽJRˆ’v8œh‰G‹7”‹4“‚’WInARavZšjKbW’VMšJ6vAn“š–ˆŸvHWf3H‹aršJf+ŠGRVx‹VŸYf“H–YabanIšYs6ŸYŽ“”š4š–‡W‹WYLŽfa’šŸw’ŽŠJhWA+Vka‹zW–X‹WA‹‹ˆHGR+a’x3a’Ž“‡4‹ˆ’sIkŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹VWNXVHwn–M™GŽ‹xWšbšsaLˆŽsxGaVŠW7W’ŽaZšJ67šZf–ŠJR”šŽxVAJf+‹XR“ŽK“JNhaZšJ67RašŽ4ŽYfŠMIJz+ŠYb2–f6bN4VY–RI‹–I–ŠJVkNˆŸ‡nŽ’ŠYbšYR7MNˆkzNf“’JbVŠJRLH‹“4HJf+ŠYIVŠJRLH‹adAR66IXwŽšY+7znx’K‰N–hš4NhaLwhz˜jnVNXŽhHZkŸY74ŽLŽHsJŸHYzœNhbnjnb3jYb4HJšœJbŸwnaNŽL“2HJšœJbŸZa3xL“”HZf8NW“’HKVNXŽhHˆkœ‡JMvˆŸ–ŠJR”šRI8YYVGIZaVŠWVJYŽ“HKRŽL6–ŠJVxŽYbYHRcz’hšYxXfŠŽYbHxfŽ6ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arW6Gjnz2ŽWšWšs“ašWr’ŠKVNŽa3H‹aršJf+ŠYIVŠJRLH‹aršW6b™GfŽJšCN‹arwJ6–Y“hxJŸ‚Yf“ašWfN’YI‡xˆMMYfAMAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3ŠWVMšsIYIRI˜HKxŠXr”šŽxRIs6™YWwhŸ8šsš”šJ66YYI‡xˆMMYfAzNhW8–+“Š‹W7W’Ža4ˆ7vYKWX–fNMŽWarw‹66ŠYb“YRV8Nfš4jR“‹IˆbfxsfMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfwnWVŠˆI”š‹š‡nVbšnzŠhRMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRˆ’dbfNLVWNYIk‡ˆf3šZŽfŠZŽfšYRk’WIŠAvb6‡ZŽf‹4xCIYRadbGIYWW‹bLIYŽ+IYŽfNY“yŽ4aMIYh”IYŽGILŽfNGš8ŠY‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚HhI8–R6G–YVa–’rL‹nfrˆŽsxGV‡Hn“’YŽAWwf6’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVCNX7W–nRGa’RŽa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚HŽ“™–RfN‹LršjKuˆY+V8jfcv–Y“hxJŸ‚Y+Vn–nx7HY‰‡xˆMMYfAzNhWn–a‡xJNMšs“VAsbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršWhv™GŽhxˆzWšRIŽaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹–œIXŽšaXAˆYKW”aŽ63’’Ž‚j‹cWN’š“a’ŽzxŽfb™’R2wŽV˜a‹z6Š’ŽzŠ4–WaGRRŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3ŠWVMšsIYIRI˜xKxŠŽ+r”š‹xRšJ66YYI‡xˆMMYfAzNhW8–+fŠ‹W7W’Žarw‹66ŠYb“YRV8Nfš4jf“‹–+f‡HnIŸH‹ašw‹f+‹LrhxWšJŽZ6HšRr‹–nbfŽsfMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVCNX7W–nRGa’RŽa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xWš4YfAzwnV‹L6G–’rL‹RadIŽ6NNˆIfŽˆz4šR“dwˆan™Y“xJ6KYfIœwnVGŽLŽhŠˆI”NŽ“HwnVYAZIN‹ZILHh“HwˆRN’GryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbŽZ“8NfIYIYx7’’I+‹RLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVxWš4N4VYaJa6ŠYIVŠJRLH‹aršJf+ŠYIVHs68šs“YjYV6ŠKVNŽa3H‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠXf+šˆ‰LH‹aršJzŸwZR+‹RLH‹aršJb6xn‰CAKš8XŽ2wY6VšKzvAr6NXaYIŽ67‹nzL’68XIŠwZšvˆuWwZf‡aYV‹+Ž2wŽNWAnh”a’š’aXŽ––hœWa4VWa’ŽŸ’sbfšYRk’ˆf3šZŽfŠZŽxwˆIVŠJRLH‹a‚šWfb™’R2wŽV˜aŽfŸxXŽŠZ7W’nfra‹z6A’šVA‹–Was8Wa’Žzx’Ž2šYJW’nf3ahbf‹4Ž–fsWA‹a7aŽ63’’Žš‡ZkW’nf–ahbf‹4Ž–fsWA‹a7ŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡HnIœH‹I8IYxŽKŸYsfLaYVfw’Ž–‹8ˆHˆŽ’aŽkv‹’ŽzŠJcWaGRRŽJ‰6™GxrwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHa‹W’ŠLr2wfV8YXVYj‹fyŽ4aMIŽ–JGŽ6wKbWŽˆx”’ˆRLdbfNY“nwK‰ˆNfR3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbfxsfLNŽAW–R6GšnzX‹x8XIŠZŽVIK‰Ma‹z8wf6swY‰VšKŸbwWVšahMv–sa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHh“”j‹fwŽhxWšYf“Vš4Žš‡ZkW’nf–ahbf‹4Ž–fsWA‹a7a’ŽzxŽIf’fJŠY‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹XR“ŽK“JNhadjKx7HLr2wYaLšRI8YnRG‹KŸYRV˜aŽff™’ŽMŽZAˆ’dbŽaŽ6Wš’‹WA‹ŽGx’RaŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡Hn“’YŽAWwf6’ŠLr2wfV8YXVYj‹fyšYVvIYRLdb6HˆIWš‹aWšYŽ“s‰G‹–”HbWšŽ–JLŽ“’Yc”ŽZŽbIYf3šZŽfŠZŽfšYRk’WA4AŽ6‡ZŽfŽZšWšYRˆwsu”™n6yNGIJ’WAWAvb“ŽZŽfŽWR”šYŽ“s‰“šLrfN‹6ˆIYfašvbGNLxy’JRLIYJZw‹‰6IGry‹4xWhxˆIhf˜wˆ‰“KŸM’V”I‹h4AnWxnzWAYV‚I+‹4wLrvAJbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆ7vYKWX–fNMŽWadAnV‹Kz–fšŸH‹‰fNLVWNYIk‡ˆf3šZŽfŠZŽfšYRk’W–JGŽ6‡ZŽf‹4xCIYRadbGIYWW‹bLIYŽ+IYŽfNY“y‹4x6IYh”IYŽGILŽfNGš8’v8œh‰GšYIWšYVJ’ˆRGIYŽG‹YbfšYRk’WIWIYŽG–ZVW‹WL‡WI2Is‰yŠYIWw’Ib’ˆfWAs‰’aŽCxšˆHG6‚wˆRCwLr–AKbWHGV‚ILVwnŸxnW‚HYšMwhfswZr‚HnzvaˆŸMIf6swšMšKbWH‹xbA‹b7ZŽVxnW‚’na3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbšYR7MNˆfdnaHK“f‹Jx8hfNwnb3IKz4YXIbšJbKwnkJAKzkNKV8šJz˜ILšVjKzCa2‰”Ihbswn““ŽGsW’+VXa‹z6aXššŠˆsˆYŽI™a’šŸw‹a6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹InjYabxXŽV’ˆh‚ws‰GNKŸWšGaMIŽIx‹‰“šn‰f‹4IJIYŽ“s‰6HˆIWš‹aWšŽIˆIYŽ6jn‰xwˆIVŠJRLH‹a‚šWR7‹K‰Xw’h4NZfdxKŽ’KzXHRVMNX7Jš4š‹WkˆHvbˆaY‰zNXŽšš’NWNLf+aYV6a+Ž–‡ˆcWwJIˆŠˆfršJf+ŠYI3Y‰ˆŠˆfršJf+ŠLIhŽJ64NŽIašW6ŽLŽš–WVMNX7JšˆVb™YbYsŸŠNKz‡ARkv+r3ŠW7J’ŽaZšJ67Z“–ŠJR”š‹xVAJf+‹XŽaGILHh“YARI–Ga–ŠJR”š‹š‡nVbšnzŠŽsR4H‹aHIf6bYL6YRV‹RxrAJfxLfXw‹NWH‹aHnx7‹LfŠŽLxhHWR‚šJf+ŠYIfIˆ‰LH‹aršJf+ŠYIVxˆzbHJ“djŽ6Gšnš2ŽJNMY’VkšffGja3Šˆaˆ‹sšJšŽr8–VŠ–h6ˆšRAWˆa˜–nfNxLa‚YsIxAhb’Iˆ‰NxWRvHWšœšR“nAˆ‰NxWRvHWaZwW“‹GV3ŽL“hHYzJšŽr8–RŠjXxˆNŽaXAJf+‹XR“ŽK“JNhaZšJ6–Y“hxJŸ‚Yf“aAJfnŠfaHŽYxKŽ’rYŽŽcM™ŽaHxŽš’HWa8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠWV8NhIYIR6Ga’rXj‹sŸH‹šJšs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJVbNXa‡wRfG’K‰VŠˆI”NfIn–RhvnzXj‹VkNZfrˆRN‹Kz2‹ˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwJ6w+rŽ4R2’YMM‡Wr’‹XŽa‹4r”NXVwY–vŽXrG‹JRbHKfrˆRN‹Kz2ŽLaŸYRxZ™‹67Z“3jŽVˆYKWjf6N‹f6VŠWfbH‹aHAnxŽLxGjhŸh‹nfHasW’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLNŽIššJb+‹XxŽw‹šWYXVŽ‡JW+w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+™NWaGŽWaGR+H+šVA‹–Was8Wa’Žzx’Ž2šYJˆ’+NWa‹z6’4Ž‚j‹cWN’š“ahfzŠ4‹JH4‹WaGRRaŽh”jXš–aX‹WNH8WaGs”Ž‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆb“YRV8Nfš4jR“’ŠHbVŠW7J’Yf4ˆŽnHK“2wYx8HW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf’Lš2wfVMNKŸYws‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆ“X–WVkšsI8h‰CAnš“YsŸKNfIn–RhvnššYR7MNˆfLˆRN‹Kz2ŽLaZYRaZWfN‹XrXYbMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVCNX7W–nRGa’RŽa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI–jH‰8LVˆAnW“Žnz”wZ6bhfKwVMAKŸbwWV6NXaYIŽ67‹nbWH‹xbwJzKwKW‚‹‹bVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwJ6w+rŽ4R2’ŽNM™Žr’‹Xxa‹JRbHKfrˆRN‹Kz2ŽLaŸYRŠM™‹67Z“VŠWfbH‹aHAnxŽLxGjhŸh‹RŠMˆŽsHYI‡ŽfLHhI8–R6G–YV™xX‘Ÿ‹RaHa‹W6w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf’Lš2wfVMNKŸYws‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arW6Gjnz2ŽWšWšs“™Nf“’Š’fVx4Ž8šfdaYRGj+RXxˆ“ZY+VnWf8™Yz2xWšJYfAW–sb+‹LrhxWšJŽZ6dšsz+ŠYbhxˆ“MNZf”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aHwnVŽLxŽ4‹MNZ64HJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršW6Gj6Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹šJšs‰ZwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰6’ZŠ”ŽWr8IŽAŸvbGHK6fGŽˆIŽI”dbfNY“yN‹6L’ˆRXYŽGaKzyšŽŽzŠY‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹XrfYsV8H‹‰GaKzyšŽŽz’ˆŽœIHbGšYh”‡4“CxJš4Nh‰GxLRyw‹xz’v8œh“™aY–”šG6W‡ˆ‹Zw2bGaKzyšŽŽz’v8œh“HwˆRNHK8WaLf4a‹z6HXŽMN’‹WNLRŽa’Ž’wJa6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹InjYabxXŽ+‹RLH‹aršJb6wZš+‹RLH‹adIˆxGHLa“ŽJWLYKŸYIŽh4‹Lr2–XxLNJInKsvxKŸYsW‚Hh“HaYaŽ’f‡–hš4NhaXAnŽZwˆIVŠJRLH‹aršJf7’Xa“YRVCN‹arwˆ–4‹Lfhx4f4NXahwna6šˆbhHnzZYfa”AnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJVCYŽ“™wsf+š6fYsW’ˆI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLHh“HaYaŽYIŠ‹JRH‹–zjh6˜AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfHLfŽJšv’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠK6šYsŸ8H‹ah–nRwfŠˆ–ˆŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”šs“8IW6’Š’fVŠˆaL’Rxawh‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršWfHKzšŽZ–ZŠˆfršJf+ŠYIVŠJRLH‹aršJf’K“X–fŽLHXVnAˆV+N4š+‹RLH‹aršJf+ŠYIVŠJRLH‹IHwR6bxXR2HRsˆŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”šs“8IW6’Š’fVŠˆa’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLYYŸ‡wRfGA4I+‹RLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠW7Mš‹“xšWr’ŠYbhxˆ“MNZhM‡WfG‹KfN–JŸ‚YfIœAJb+šI2‹JV4NŽ“™–sf7ŠK“š–LxkYXVYjh6ŸanbhHnzZYfa”aJa6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹InjYabxXŽN–XRkNJakwYxGaY6hxˆzˆNKfrwJ67YGrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLN4aYY–4‹Lf3ŠW7v’sarasb‹AJbVŠJRLH‹aršJf+ŠXf–ŠJR”šs“k–sb‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰6’ZŠ”ŽWr8IŽAŸvbGHK6fN‹6”‡WAœšJ‰fNY“y’JRLšYRXšJ‰bxWŽZ“LIŽAˆws‰fŽGRyšYRk’WIanŽG‹Y6xwˆIVŠJRLH‹a‚šWR7HKzhHRšŸNKfdjKx7HLr2wYaLahM”Ž’ŽIY‹WYGfnaŽ6+’XAZj‹JWNYR+aG‘ˆN4ŽvHˆcWAf‡aY‰b‡4ŽšGAWYGfnaŽ6+’XŽšŽkˆ’dbŽaŽ6Wš’ŽM‡ˆMWNH8ZaŽf6I4‹WA‹‹WwˆWraGrŸHXŽ“–fcWaLfba‹z6j‹a6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanIXxJšCN’Vnwf6’šZr+‹RLH‹adaJa6ŠYIVŠJRLH‹aršJ67’XŽXj‹sŸH‹“™–na‹Lš2x4h4Yf“VwˆaIN–WšWYŽAzwsb+š6‡jYbM’ZI‚šJf+ŠYIVŠJRLH‹I8w‹f+6hHs6ZNXaawJ67’XŽXjGILHXahAnVb‹Lšh–JWHWŠM™Žr‹ŠGrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arˆx7+rVx+rLHh“HwˆRN’GxŠw‹š”YYMŸjKRŽLa2ŠˆIYh“YIna7’XŽXj‹74NŽAWˆ74NˆIKŠJVbNŽAWˆ–4‹LfVŠJ6J‹’aYjYabŽLŽhxŽ6ˆY’aYjhf6NZryIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJV8Nh“™wnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJR”šs“k–sfs–nI‡HRV‚NŽ“aIRrbxKbšw+f˜N‹IYAˆV+šˆŸHRšJNJ“™aYaŸŠXa“Ž4Ž”NXaXšˆš+ŠKŸXwŽšZH‹a‡IRs4ŽLfXwŽšWšsŽIfh4ŽL6VYaM’ZI‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹adIˆabŽKŸN–XRkšsI™wJb+NZšNHsJ‚HJšœŽsb˜™rNŠ4“ˆHLfZšJ67‹XxhxLaZYRaZšJ6–Y“hxJŸ‚Yf“aAs‰ZwˆIVŠJRLH‹aršJfwnWVŠˆ“CNXaYIYx+šˆb2ŽJNMY’VkwnaŸvba‹ˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf7HKzhHRšŸNKfrˆVGxXrš–K“8N4R4jR“‹AJbVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIXwŽNMšR“‡I‹fwxXxZ“ˆYhIŽwJf8jfNx4x6’sarˆx7+r3Ža3H‹aršJf7–sb+‹RLH‹arIhb6wJbVŠJRLH‹arA‹fy‹‰J‡WIŠwŽG™Y8”ŽJ6CšYR‡vbG™nIyšYRk’J‰ršˆŽ“NˆIywY“JIŽIœšZŽGaKzyšŽŽz’ˆŽ“sŽnKxw+V“YR7WaŽ6+’X‹ˆšGI+‹RLH‹aršJb6ŠhRXwŽNMšR“‡I‹f7’XrXwYzWYLfswZNWŽnzba’I8hfNwnbV–ZšˆHG68An‰–wYŸMjKW4A‹“bwhfwYf2aˆz6’sx8hfNwnbV–ˆz6HKŸ‚IXŽ‹wnJWaˆWaf“8AXIˆwnf–xnŸbwWxbŽfswYŸVwKzvYKšAhb2ZŽ–H‹bVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹VkY’aHAnxbw+rf‹ˆIMŠˆfršJf+ŠXI+‹RLH‹aršJf+ŠYI‡HsœWNZfr™‹f7’XrXwfVˆNhAŸ–W6NHY‰Xxˆ“ZY+aYIŽfG–Yz3Šˆx˜HLf”As‰ZwˆIVŠJRLH‹aršJfwnWVŠˆ“˜šs“‡Iˆ74’Y‰‡HsœWNZfZšJk4šr2wŽVˆš+aawhb‹–+fŠŽsRMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYbhHncMH‹ŠMšJ67‹K‰“YsWJ‹nWnWf8™G6“xWš4NhaLwf67ŽLxXHsœWNZfd–ˆRGaYb2–ˆaLšhadwYRGaYbX–WVŸH‹a‡IRs4ŽLfXwŽšWšsŽIfh4ŽL6VYaM’ZI‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹adwnV7’KzfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arˆx7+rVx+rLHh“HwˆRN’GxŠw‹š”YYMŸjKRŽLa2ŠˆIYh“YIna7’XŽXj‹74NŽAWˆ74NˆIKŠJVNˆWYIJf+HLxx–WšŸNˆWYIYxRYLšš–Wš˜HYfXAs‰ZwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠLIXwŽšY+7znx’K‰3ŠˆaˆYs–œwW“n’GVŠjYzXšf–œwhz+ŠYbhHncMŽZ6dšsz+ŠYb2ŽJNMY’VkwnaŸ4I+‹RLH‹aršJf+ŠYI“ŽWfLHJI™IKxGa’r3ŠWVJYŽ“HKRŽL63Ž+xœHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIXwŽNMšR“‡I‹f+‹LxšYRVCN‹IYjfI˜xKxyIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJVŸYf“H–YabanI“Ž4RZNhAŸW6’šˆfNHs6XNKfVAJf+‹XrfHRRM’ZI‚šJf+ŠYIK‹Y‰3H‹aršJf+™R3šˆ‰LH‹aršJf+wˆAWAKfnaf6b4Ž2AŽ‹WaŽa‚aGrGI4Ž‚–L‹W’nfya’IŸŽ+Ž“–ff+‹RLH‹aršJb6xnW8YY6bwLr˜wKJZKzˆYfr”IYuZwnŸ3K‰vAXIIKsZAncJjKŸbwWx8IGr‹wKz3Kbˆah“bšˆs‚wKzšjLrN‹zšZVwncZIKbWwˆVCšJf˜wGŽVYrbNŽxIh6ŠwVK6LH’a8ˆ‰˜KIVjKWWHŽ“MwYR‹wYz2xnWCN’ICšJhMHJf+ŠYIVŠJRzH‹ŽdIWfNHK“2‹JR”NJInKsvxKŸ‹JV˜šs“‡AnVbNˆAWNLRŽa’Ž’w4Žšj‹NWYha™ŠˆfršJf+ŠYI3‹VrNˆWY–nxNHLŽVxJ6ˆNXVœwRfGanAWwˆfxaŽfzšXš–‡W‹WYLŽfšs“‡–Ž6f‡4“C’WI”AˆŽ6–rfH‰8’WI2wKWnV7’Kz+‹RLH‹aršJb6wZš+‹RLH‹adIˆxGHLa“ŽJWLYKŸYIŽh4‹Lr2–XxLY’VœwRfNHY‰‡HsVkY’VJRkvŽGr+‹RLH‹adaJa6ŠYIVŠJRLH‹aršJ67‹XxhŠJsŸH‹aH–nRw6–Ž+ŽkYhI‡šK–vnz2xZI‚HXadIsf’LaŽJšŸH‹aXI‹67ŠK“š–LxkYXVŽAs‰ZwˆIVŠJRLH‹aršJf7HKzhHRšŸNKfd–nabwx3HsœMNˆŸHIKV™’aYsf‚Hh“HanxnAZIN‹ˆbM‹RŠMwK–4ŽK6š–fš˜NZfXaJa6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹x8J8‚wnfzKzWARxwsbLIXš–ŠJŠˆ’RA4H‹ŽnKxw+V“YR7WŠˆfršJf+ŠYI3‹xbwRfCwYŸMjKŸbaˆ68If6ŠZŽ‚aˆzHˆ6‚AL7ZwLš“aZrka6wY‰‹wŽMŽnŸ8Hˆ6”IXš7wYI“3ˆŸ8YG6MwKR–wKIvwKzkaZš”IY‰2KIVjKWWHŽ“MwYR‹wLš‡‹nzvYK6CšJh4wnb‚jK6LHG6bI‹fNAnW“ŽnW8NhxbKsZKIV–sbVŠJRLH‹arA‹fRŠLIšYs6kNfarˆaxK6“–hšYfNŸRh4‹LrhwYMMšŽadjKx7HLr2wYaLaYVzŽ’‹W‹ˆuWYGfnaŽ6+’hMMxK6hxˆMvNŽ“Ha’AZj‹JW’+š–aYR“Š4AZjYR‡–hŸˆNf–W–R6GaY6Ž4‹M’nJzIszŸa’R“‹4ŽaYŽ“YIŽhvnzXwRš‡H2b6RyšYbWIYfZšvb6–GŠ”ŽvbvIŽ–‚wˆŽ’a‹”šŽšC’ˆWhwZŽyŠYILwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHWfN‹K“VHsœMNˆW8IŽ6ŸxnbˆHJxI’ŽwKW‚ŽnW8NhxbKsZAnz3aˆzL’6ˆIhf˜Zš‚IKzMwJzˆIh6vYI‡šˆfX–hNWHYfrYRŽLa2x4“6an‰+YXš3xˆuWaf–ˆaŽ6+IXŽšAYuWNLRŽa’Ž’w4‹WA‹‹WYhaaaGrf–XŽ–jYAˆY‹a’a‹z6Š’Ž“‡4‹ˆYfaWaŽf+™+ŽMŽZAWw4VWahM”H+ŽšaXI+‹RLH‹aršJb6ŠhRXwŽNMšR“‡I‹fHLš2–L“8YŽAJš4Ž‚ŽsWYGRKahM”Ž’ŽIYŽhHskzYK‹”™n6yŽˆb4šYhMAnŽ63ˆzyŽˆVwŽ6kNh“™wsa6ŠYIVŠJRLHˆfdŠYxf2–ˆx˜H‹ŽYaRhvŽLIhxˆzˆNKfsAnz‡wK‰va2‰bGrˆwncZAKzˆH‹z8I‹zCZNˆHnWLN’“3H‹aršJf+ŠGR3’“3H‹aršJf7ŠXRšwG“MYGfdwYxGaY6hxˆzˆNKfdjKxxLfhx‹šZNJaLˆaxK6“–hšYfNŸRh4‹LrhwYMMšŽaZšJ6‹K“hxJ‹ŸHLfXAsa6ŠYIVŠJ7ZŠˆfršJf+ŠYIVŠJRLHhIHnxxYIŠ‹JR”YhIn–Rf‹–+f‡jY–‚HLfXah6ŸŠGx–ŽWš˜H‹aXI‹6‹K“hxJ‹ZŠˆfršJf+ŠYIVŠJRLHh“Hanx+Š’fVŠW7MN‹I8jhz‹aY“xJ6KN4VkwnVIˆ‰‡j‹VkNfadjKxxLfhŠJRJNKfrwhz6‹LIšŽJŸvYŽIhwRcvxK6hxˆMvNŽ“Ha‹z6‹KbšYRVkHWx4HJf+ŠYIVŠJRLH‹adAR66ŠY‰š–XhzNKŸxwJ67‹XxhŠˆ8”’Ža8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVxˆzbHJ“™–naŠLšXjYI”šs“k–RI˜xKx–ŠJR‹f“‡jY74HYŸ3‹JsŸ‹RŠMIJbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7‹K‰Xw’h4H‹AWwnxŸŠhšfxJŸ8NJ“HAn7van‰“Ž4RZNhAŸW6’šˆfyj‹R6’sarˆx7+r3‹ˆ8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYI“ŽWf‚N4aHjYa™G63ŠW7Mš‹“HNhWn–aVŠˆx‹šsInjYxwŽjK‰HWar™Žr‹–I3Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹“HjYxGŽ’I+‹RLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠKWšŽZ“˜Yfx4HJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’WAœIGŽGHGxWŽJV’ˆRJwZŽGaKzyšŽŽzŠY‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹LIšŽJŸvYŽIhwsf7’XrXwYzWYLfswŽMŽnŸ8Hˆ68hfNwnbV–sbVŠJRLH‹arA‹fRŠLfYR7zNˆJJšWfb™Gš2xWškNKfswYf‡xnz6Ad‰‚IXŽ‹wnJWa’rXwfš8a4IŸ’’Ž“‹Zcˆ’Ra8aY‰zNXŽšš’NWNLf+aYV6a+Ž–‡ˆcWwJIˆŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹V˜šsAŸIWRNŠLI3ŠWVZYŽI™AffGšnz3‹Y‰LH‹aršˆŽZwˆIVŠJRLH‹aršJf+‹XrfHRRL‹RarˆxrXj’‘”YŽIHŽc4’K‰ŽZ“4HJaXšWfG–nIw’fŸY’VŽIn–4‹LšXŠJR’nfHIWfG’LVšŽˆx8HWx4HJf+ŠYIVŠJRLH‹adAR66ŠY‰Ž4RZšs“”wJ67‹XxhŠˆbMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠLfYR7zNˆJJšˆx7HXRŽa3H‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLšsIkjY74NˆI2wŽN4H‹ŽYaRhvŽLIhxˆzˆNKfkAnVNŠLa2–fV8HJaVaJf+HGaVŠW7Mš‹“xAsb‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰6IˆA”’RJj‹V‹Yf“‡–KRG’Kz+‹RLH‹aršJb6ŠhRXxJšŸYŽAMšJ67ŠK“š–LxkYXVYšK–vŽLfhwYzCYfadjKx7HLr2wYaLaYVzŽ’‹W‹ˆuWYGfnaŽ6+’hM”NYš”’ˆ‹Zs‰’aZxWNYaCšŽI3wˆ‹”™n6y‹vb6‡WIbšZ‹”™nW6šn62–XrWšsIYIŽhvŽLŽhŠ4ŽJNf–œIYaj+R–KzW’nWnfhv™’R2wfV˜šŽAWhzb–GšxWš4’nbnfhv™’R2wfVdšR“HwW6Ga’r“ŽJŸkšsAŸjŽ‹vŽLfhwYzCYfaKwˆ‰“KŸM’V‚AJfŠwZx2šKzˆA’I”IXš7wKW‚ŽnWa‹RLŽ’VYjYxbwn6šH8œh‰G‹rWŽˆb8IŽ–JšJ‰’aRWŽJšW’WIfHbfNY“yšŽŽz’W–”Hb“YG7”ŽˆWLIYRfwh‰6IGšWŽˆbk‡W–JGŽG’ˆœ”NYav’WAˆws‰6ILrfNŽfˆIYŽ”IGŽ6YKWWN‹z‡ˆRaYŽbŽGVW‹4fkIYRšA2b“jY‰fNYa6šYRšILŽfZŽW‡4“C’WIŠA2b’aZrf‹4“‚’ˆRJAs‰GŠGš’Lš2‹4ŽkNKWHjY7vwnb–whœWN4aHwnVNŽLr–j’Ž‹šŽ“™–R6G–Žš’ŽhŸ8NˆŸARhvŽ‹bVŠJRLH‹arA‹fRŠLIšYs6kNfarWfG’Xr“Ž4fWH‹“™–nabwŽj‹xbwXŽswY8J–ˆbˆYL68Jh4wL‘ZxšˆHG68AJz7wYW33ˆbˆN‹x8whbkŠKVb‹Lf2–Kz”NfInIYRGYKzX–WxM+x˜wVMAKbWYYŸwY‰xHJf+ŠYIVŠJRzH‹ŽdjŽ6N‹XRXw’xLYYJŸIKVŽK“2‹xb‹6swnfM3ˆ‰ˆaŽx8w’‹W–naŽKMZaZfaaYR’j+š–‹ˆMˆ’dbŽaŽ6WšŽ6bxLaX–fŽ3H‹aršJf+ŠGRVx‹7MN‹“‡IKŠ4’YIHYn“CYf“d–nRG™GŽV’ˆWŽwYŽ6IL7”N‹bb‡WI7IGŽG™nIWŽ4xW’W–‚wˆŽ“ŠLVZwˆIVŠJRLH‹a‚A‹zZwˆIVŠJRLNJ“YYVwn6VxWkzNKW™–nRG™GŽVHsœMYŽ“‡–R‹vŽLfhwYzCYfaLˆaxK6“–hšYfNŸjf6NHXV“ŽJŸ8‹RaXwhz+ŠYbšŽJœMNŽAŸIŽr’NˆŸ3‹Y‰LH‹aršˆŽZwˆIVŠJRLH‹aršJf+‹LIšŽJŸvYŽIhwRc4’KzXwf6MY’VŽšWr’ŠYbXxJšCN’Vnwf6Y™G6YskvNŽI™wRr‹–nŸ‡jX“HL6‚whf+–GŽVŠˆaWHh“dRhvIn“–fšKN4VYjYxbwn6Ža3H‹aršJf+ŠYIVŠJR”YŽI™–nRG™GŽVx+rLHhInKxwš2X‘ŸHLfX3J6ŸN4š‡j‹RJYŽarwhz6‹K“š–WVMNX7JaJa6ŠYIVŠJRLH‹aršJ67‹XxhŠJsŸH‹aH–nRw6–Ž+ŽkYhI‡šK–vnz2xZI‚HLfdnV’ŠL6hxJšŸšs“™wnaYLrš–fŽLHLhJˆaxK6“–hšYfNŸjf6NHXV“ŽJŸ8’nfHRh4‹Lr2–XxM’ZI‚šJf+ŠYIVŠJRLH‹I8w‹f+n62–WšWšsaLˆx7+r3Ž+xœHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYI“ŽWf‚N4aHjYa™G63ŠW7Mš‹“HNhWY–aVŠˆxnNˆŸ‡IKa6NZrVx+‘Ÿ‹RxrAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆxf2–ˆaLNKWY–JfRŽXxš–fšZšsI8IKV6r2YsV4NXVHwsb+H’IVŠJf4H‹aH–nŽ7‹Gr3Ža3H‹aršJf+ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠLrY“˜šs“‡Iˆ74’Y‰‡HR7Jšsš4IW“’IˆI‡–‹œMYŽ“‡–nRGaYŸVHsŸ8NˆŸARhvŽ’šVxYzWšsIYIYx+NZrVx+‘Ÿ‹RxrAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJVŸYf“H–YabanIhHskzYfx4HJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹InV7’KzyIˆ‰LH‹aršˆšxwJbVŠJRLH‹–œA‹bLwˆIVŠJRLH‹a‚š4Žšxˆ–WA’V6H‹š™wnaYLrš–fŽ3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbXxJšCN’Vnwf6Y™G6YskvNŽI™wsf7’XrXwYzWYLfswŽMŽnŸ8Hˆ68hfNwnbV–NWAdbxa’IWx’Ž–I’7WAf™aŽfzsa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHhInKxwš2‹V˜šs“‡AnVbNˆAWAdbxaGry’XŽ––K–WYha™a’šfI4AZj‹JWNhaœaGr6IXŽ––KAWYLf‚‹ŽAWˆab™Grx4RkNKW8wŽ6N’X‘ˆYYŽaaYsˆN’Ž–w‹kWaGRRŠˆfršJf+ŠYI3‹VrNˆWY–nxNHLŽVxJ6ˆNXVœwRfGanAWwˆfxaŽfzšXš–‡W‹WYLŽfšs“‡–Ž6f‡4“C’WI”AˆŽ6–rfH‰8’WI2wKWnV7’Kz+‹RLH‹aršJb6ŠhRhxˆ“ŸNXahjhfRŽXxš–fšZšsI8IKV6xr8HKŸ‚AXN‚wYfMIKzkaZV8Ihf–wŽ–Kbˆah“bšˆsœHJf+ŠYIVŠJRzHˆhœHJf+ŠYIVHs7zYYWœARfŸŠKWhŽ4ŽCšsI8IKV6ŠL6hx4fZŽ’VYjYxbwn6‹ˆI”NJInKsvxKŸŽXf˜Yf“‡–KRG’KzŠ‹ˆa’sarWfG’Xr“Ž4fW‹RaXwhbxwˆIVŠJRLšGI‚šJf+ŠYIVŠJRLH‹aHIWfG’LVšŽˆx8Y+a™wnaYLrš–fŽL‹RarˆaxK6“–hšYfNŸjf6NHXV“ŽJŸ8‹RŠMwh6˜™nŸ‡jK‰H‹–zI‹f+NZŽ‡HsVkY’VJRkvŽKšX–fšŸšnW8f6‹AJbVŠJRLH‹aršJf+ŠYbšŽJœMNŽAŸI‹fs–nI‡xJšCšsI8IKVC–+f‡jY–‚HLfXah6ŸŠGxš‹JR’nfHRh4‹Lr2–XŠZŠˆfršJf+ŠYIVŠJRLHh“Hanx+Š’fVŠW7MN‹I8jhz‹aY“xJ6KN4VkwnVIˆ‰‡j‹VkNfadjKx™GIX–fšŸšnW8f6’ŠYŸ–ŽVZYŽI™AffGšnzN–JŸ8NˆŸARhvŽGŽ‡xJšCšsI8IKV64I+‹RLH‹aršJf+ŠYI“ŽWfLHJI™IKxGa’r3ŠW7Mš‹“xARrCxGrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹adAR666hHs6ZNXaawJ67‹XxhxLaœYRaZšJkMŽLfXw’fŸHLf”šWr‹–+faŠˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJ7MN‹“‡IKxŸŠLŽYnaL‹f“kf6NŠXr“Ž4fWHJI8InajšxWŽ‚HY64šJf6IˆI‡HR7Jšsa”As‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹I8w‹b7’XrXwhVˆNZfLˆx7+rGjhVh’sarwf‹4‹LšXHsVMNKWXšˆ–vŽLfhwYzCYfx‚šWaGa’rŽ4‹MHLf”šWr‹–+faŠˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf7HKzhHRšŸNKfd–naŽKzyIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJVŸYf“H–YabanIw‹š4N4VŽaJa6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹x8Ash4wnf–NK‰vAXI8AsfKAncJjKŸbwWxbwn‰KZ‹ZNKz6’sxwszNwˆ“‡x‹bVŠJRLH‹arA‹fRŠLIšYs6kNfarˆabŽLx2–WV8Y+VAnVŽYIX–WVŸNŽAWwhfyGŽˆIŽI”dbfNY“yNŽIk‡W–ZIŽ6–Z7”ŽvbkŠY‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹La2–hŸkNhNŸˆRNHYIX–WVŸNŽAWwhfyšŽŽJšYfRˆŽ’anfWšYRk’ˆŽ2ALŽG™Yzf‡4“C’WIŠšZŽ“ŽLayŽWrv‡W–ZAnŽfNˆIfšŽšMšH8œh‰baˆWyGŽM’WI”KŽGHGxWŽJf4’WAŸvbGHK6fšYVvIŽAŸwn‹”™n6yŽˆWLIYRfwh‰GNZR7šr2wŽVˆš+aŠAncJjKbˆHJx8šJz˜wnf‡wKbWH’a‚š4A4wYW33ˆŸ‚as“w’ŽCwKW‚ŽnW‚’nŸw’NZwšYšˆHY6bsh‚wYI‡–ˆWbHv‰‚+IŠwa‡Hn‰MwJ“”I‹fsZŽ3AKW8wˆš”I’I2wr–wLšˆHYŸˆIhf˜wnb3NKz6HKŸ”Ih6vwYfzYr8HKb3H‹aršJf+ŠGRVx‹VŸYf“H–YabanIX–WVŸNŽAWwhfyN‹f”’WI3w2b63ˆzyŽˆVIŽIJw‹‰GŠZRyŽˆaz’ˆŽŽInŽ6xYbfw‹“C’ˆŽ“s‰“Žˆc”‹4IJIYh4A2bG‡ˆ“y‡4“C’WI”AˆŽ6–rfN‹bb‡WI7IGŽG™nIWŽ4xW’W–‚wˆŽ“ŠLVZwˆIVŠJRLH‹a‚šWR7‹K‰Xw’h4NZfdxKŽ’KzXHRVMNX7Jš4š‹WkˆHvbˆaY‰zNXŽšš’NWNLf+aYV6a+Ž–‡ˆcWwJIˆŠˆfršJf+ŠYI3Y‰ˆŠˆfršJf+ŠLIhŽJ64NŽIašW6ŽLŽš–WVMNX7Jšˆa7ŽLa2xŽ6MNhIŽwJ67HKz2Ž4hMYfNŸwYRGjnz–ŠJR”NhAŸffGjnšxˆzŸ‹RaXwhbxwˆIVŠJRLšGI‚šJf+ŠYIVŠJRLH‹aHKVG‹YIŠ‹JRYŽIH‹f+–G6VŠˆaWHh“HwˆRN’GxŠw+f”Yf“ARhvŽGŽ‡j‹VZšRIœAJf+NZŽ‡Hs68NfAŸ–R6Y™YW“ŽZ“8’nfXšJ6Ÿanb2x4fCYŽIœšf6wfyIˆ‰LH‹aršJf+ŠYIVxWNJYfIawJ6’LxŠZILHhAŸ–Yx7ŠXRhŠZILHh“‡wnx7ŽLf2w+hvYŽ“VAs‰ZwˆIVŠJRLH‹aršJfwnWVŠˆI”NˆWY–nxNHLŽN–W6kNˆfR™Žr‹ŠGrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹adAR66ŠY‰Ž4RZšs“”wJ6™’RhHs7zšsa”AnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆxf2–ˆaLNKWY–JfRŽXxš–fšZšsI8IKV6šˆœˆHv84aGRyŠ’ŽM‡ˆMWAnfˆaŽ6+w’Ž“ahkˆHJ‰nYŽIH’ŽHJJWNXV‹aŽfb’Xš–‡WsˆHJIaŽ‹Žk‹’‹WA‹‹WaŽa‚aY‰6–4ŽMGNWYhabaŽfG–4ŽMj‹kWwˆWahb’Ž6Nnzš‡WIHIKŽ’aZryšYRk’ˆRhšvbbYKby‡4“jYaM’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIVŠJRLH‹IYAˆ–vŽXI+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXr“Hs6ˆšfdIŽ6NNˆIHYn“CYf“d–nRG™GŽ3xˆzJNJIœIf6ŽY‰VLaLHYfZšJ6™’RhHs7zšsa”As‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLšfR‚IhzŸŠYIVŠJRLH‹aršˆRGYY‰X–WVŸNJAŸjhb+‹LšhYRVZšR“HNhWn–aVŠˆxbNŽIœwsf7ŠXR2xZ“8YhaZšJW+ŠL6“–KzZNJIYJz6NZrVx+xZHW“4HJf+ŠYIVŠJRLH‹adAR66ŠY‰‡xZ“ˆY’VnAWcv‹LrXX‘ŸHLfXAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJR”NhAŸffGjnšxˆzŸH‹ŠMšWcz™‹Ž’Žh6KY64HJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJ6jšš–hš4Y+VHAna6Š’fVxˆzWY+VnjYabxXŽ3HsœzYYŸ™–na6šˆb2x4fCYŽIœšf6wf–ŠJRJ’Ža”AWIŸNZš‡jGIYsšZwf“’ˆIŠj‹R”NhAŸffGjnšxˆzŸH‹x‚šJ6jšš–hš4Y+VHAna6a‹Ž’Žh6n‹’RH‹RŽ8wnšŽ–Ršx‹Žš‡ŠfšR™ŽayIˆ‰LH‹aršJf+ŠYIVŠWV4NXV™nVn™YW“ŽZ“8H‹ŠMšJ6jšš–hš4Y+VHAna6ŠGŽVxJ6kN4VYIŽfG–Yz3ŠWVŸYfAzIKxŽKšwYz4Yfa”aJa6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aHAˆ7v’K“2xXfbNŽIœws‰ZwZš–j‹RLH‹aršJf+ŠYIK‹Y‰ˆ’fršJf+ŠYIVŠJRLšsIkjY74NˆI2wŽN4H‹ŽYaRhvŽLIhxˆzˆNKfkAnVNŠLa2–fV8HJaVaJf+HGaVŠWVˆšR“HIˆxN‹Gr3Ža3H‹aršJf7–sb+‹RLH‹arIhb6wJbVŠJRLH‹arA‹fyŽˆbCšŽIVIŽfŽGxf‹Ž”šYW7h‰fNY“yNŽIk‡W–ZIŽGHGayGŽˆIŽI”I‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠWV4NXV™nVn™YW“ŽZ“8H‹“™–nabwŽj‹xwszNwˆ“‡HnbWHGVwY‰‹wYz‚šKbWaˆV‚I+N‚wš‚‹‹bVŠJRLH‹arA‹fRŠLIšYs6kNfarˆabŽLx2–WV8Y+VHAna6ŠL6hHs6MNKWXš4š3a28WNŽa7afff’’‹WA‹‹WaGŽWaY7vŽha6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹“™–nabwŽj‹xb‹6swnfM3ˆ‰ˆaŽx8w’‹ZwVKzLAY68whbCwKz–Yn‰kHh“M+x˜wKW‚ŽnW8wˆš”I’I2wZŠˆ3ˆzˆwWxˆIhf˜wr–Hn‰JHW“bGrˆwncZAKzˆH‹z8I‹zCZNˆHnWLN’“3H‹aršJf+ŠGRVx‹7MN‹“‡IKŠ4’YIHYn“CYf“d–nRG™GŽV’ˆWŽwYŽ6IL7”N‹bb‡WI7IGŽG™nIWŽ4xW’W–‚wˆŽ“ŠLVZwˆIVŠJRLH‹a‚A‹zZwˆIVŠJRLNJ“YYVwn6VxWkzNKW™–nRG™GŽVHs7zN4VkxˆRGjnz3ŠWV4NXV™nVn™YW“ŽZ“8’sarˆabŽLx2–WV8Y+VHAna6JbVŠJRLH‹“4HJf+ŠYIVŠJRLH‹arWhv–YbVx+rLHXVnWf6ŠGxXj‹R’nfH–nRw6–Ž+ŽKYhIY–KRG’Kz–YaLNJ“YjKR+ŠYŸ–ŽV4NXV™nVn™YW“ŽZ“8’nfXšJ6ŸanbXwŽšJNXaHwRcv‹LrXLa3H‹aršJf+ŠYIVŠJV8š‹IYhb+‹K62ŽWR4H‹aHIKxN‹LIhYRR4H‹aHjŽ6N‹XRXw’ŽKšnWnj‹b‹AJbVŠJRLH‹aršJf+ŠLr‹R‚Hh“‡wnx7ŽLf2w+hvYŽ“VRr‹–I3Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3xWšJNJ“Ha‹b+‹LšhYRVZšR“xAsbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7‹K‰Xw’h4H‹AWwnxŸŠhšfxJŸ8NJ“HAn7van‰‡‡ˆfˆIdb“KIyNYšMšYRXAh‰GNZayNŽIk‡W–ZIŽ“YG7”ŽWRMIŽIJw‹‰GNZRy‡4“C’ˆRVwŽ6ŠY“fGŽˆIŽI”dbbHn6yšYRk’ˆŽ2ALŽG™YzfNŽfv‡WIxAŽGInWyŽˆaz’W–ZAnŽG‹nfWNŽfv‡WIxAŽ“’rfNYa6šYfWI2bbYVWNYxL‡ˆWJaXAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLH‹aršJfŽLaX–fNZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJ7MN‹“‡IKxŸŠLŽYnaL‹f“kf6NŠXr“Ž4fWHJI8InajšxWŽ‚HY64šJf6IˆI‡x4hzšs“d–Yx+ZryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJfwnW3HsœMNˆŸdIKaŸšˆb2–WNMNJ“Y–RI˜ŠKx–ŠJRYKW8AW6’ŠLIhYsŸ‚YfIxAJfsŠYIX–LxMNJ“dwR6+anŸ3‹Js”’‹a8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠWVŸYfAzIKxŽKšxˆzŸH‹ŠMšˆ–4ŽKfX–WVŸHJaHjŽ6G–GšhxWšKYhI8j‹z+ŠGxa‹ˆ8Ÿ‹RaXIh6ŸŠH‰VŠWVŸYfAzIKxŽKšxˆzŸH‹x‚šJ67HKz2Ž4hMYfNŸˆRNHGŽ‡j’“’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYbXwŽšJNXaHwRcvYLr2xWŽL‹RarˆabŽLx2–WV8Y+VHAna6ŠGŽVxJ6kN4VYIŽfG–Yz3ŠWV4NXV™nVn™YW“ŽZ“8HWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIXwŽNMšR“‡I‹f+‹LfŽ4RˆšsIYšf6bwaŽa3H‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLšsIkjY74NˆI2wŽN4H‹ŽYaRhvŽLIhxˆzˆNKfkAnVNŠLa2–fV8HJaVaJf+HGaVŠWVˆšR“HIˆxN‹Gr3Ža3H‹aršJf7–sb+‹RLH‹arIhb6wJbVŠJRLH‹arA‹fyŽJf‚’ˆWAs‰6IGšWŽˆbk‡ˆW7h‰fNY“yNŽIk‡W–ZInI‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠWVŸYfAzIKxŽKšwYz4YfadjKx7HLr2wYaLah8ˆ‡4Ž“‹JcWaGRRaGr“H+Ž–I’7ˆ’nŽˆaY7ˆx‹a6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹I‡IK7vjnzšŽ4xLaY‰6‹’ŽšAYNˆ’dbŽaŽ6WšYx7HXRšH8œh‰GZaf’rMšYR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vanAˆYfaah8”IXŽ‚AY7WYY‹ˆaYVŸŠ4Ž2’ŠW’dbkaY‰Iha6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanIXwŽšJNXawRVbwa‹ˆI”NˆWYIn74‹KzN–f6MNhIŽAsa6ŠYIVŠJ7ZŠˆfršJf+ŠYIVŠJRLHh“HwˆRN’GxŠw‹š”YYMŸjKRŽLa2ŠˆIH‹“‡Isf+NZŽ‡Hs68NfAŸ–R6Y™YW“ŽZ“8HWx4HJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLšs“‡–Ž6‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰6’ZŠ”ŽWr8IYfWILŽGˆc”Ž4f”‡WI‡KŽGjnk”Ž4Ž8šYR‡šJ‰“NˆffN‹‰M‡W–ZIŽ’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wˆIxHs68šs“YjYV6ŠL6hHs6MNKWXš4š–‡W‹WYLŽfŽJ‹z’’ŽMN‹cWA‹ICŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹7zNŽšhAR6šnzhHsW‚HWR‚šJf+ŠYIfIˆ‰LH‹aršJf+ŠYIVŠWVbNŽIœwnVbxLx‹JsŸH‹ahwY74HKš–fNMY+aYARcv‹Lšš–WšJYfAW–szx2Šˆ–ZŠˆfršJf+ŠYIVŠJRLHh“dnxšˆIŠ‹JR’+a™WhvxLfŠ4“’nfHwYRGjnz2w‹šJYfx4HJf+ŠYIVŠJRLH‹arˆ–4‹K“XwfVŽNŽAzwsfs–nI“Ž4‹MšnWnAJb–Grš–J6ˆšsI8IR6’+rXwfš8HWa‚jsWsŠGI3Ža3H‹aršJf+ŠYIVŠJV˜NhIYwna+šZ“3Ža3H‹aršJf+ŠYIVŠJV”NLfdaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠW7Mš‹“xšWr’ŠYbhxˆ“MNZhM‡WfG‹KfN–JŸ‚YfIœAJb+š+R“ŽJNzšsAŸIRfN‹LšX‹V”šRAzIJf+NZŽ‡HsVkšsILAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJVMYKfLR6G–GIhHnb‚Hh“Hanx+ˆI‡ŽfLN4aHjYa™G63ŠW7Mš‹“HNhWn–aVŠˆxY‹WadwˆRGŽLfš–K“kNˆŸ”šW67ŽLxXxWš”H‹“HIh‰6ŠYŸ–ŽVZYŽ“HwJb’ŠY“ŠŽ+rZHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+6hHs6ZNXaawˆRG–GI2x4f”YfaL‹‰ŸŠYf–ŠJR”šs“k–sb’IˆI‡–X‹zNhIZšˆab™GšhŠJVWNXVHwsf7HKzhHRšŸNKWYJfHXŽVxfšMŽhIYjKxRxXRhx4fJYŽ“HAn7va‹aXwYz”YXVŽwhb’ŠY“ŠŽ+rLYKWnAˆ–vŽGrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aH–nŽ7‹YIŠ‹JVbYŽIœjf6‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfŽLaX–fŽLšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7‹K‰Xw’h4H‹AWwnxŸŠhšfxJŸ8NJ“HAn7van‰‡–WšMYŽ“Y–n7v–Y“hx4fŸH‹IH–YVNŠYIYs6ŸNXaVahf+NˆI–‹VMNf“dAˆ7v‹Kz3ŠJhZH‹aVAJf+‹XrfHRRMHWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹adAR66ŠY‰‡HR7Jšsar™Žr‹–nIw‹š4N4VŽAsf7AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+™NWaXV‡aY7ˆxhWfšYŸ”IŽIKŽ“KIyNYšM‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIhYsŸ4YfIYIJbsxGIaxsRZ’‹xrAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLH‹aršJf+‹K6hYs6ŸYfAW–Ršwx‹JsŸH‹I8IYx7YK“2Šˆ“JNŽI™jY74‹Lr2ŽWŽ‚šs“‡–Ž6’ˆI3‹Rœ’‹xrIJb‹AJbVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIh–K“MNhIŽwJ67‹XxhŠJsŸ‹RŠMšW6bxLaX–fŽLHKfššJb+‹K6hYs6ŸYfAW–Ršwx‹4r”N4aHna‹fŽ“Ž4R8‹sxšIJWsŠGI3‹ˆ8ZŠˆfršJf+ŠYIVŠJRLN4VœwR6NŠY‰aY8ZŠˆfršJf+ŠYIVŠJRLšs“‡a‹f7AJbVŠJRLH‹aršJf+ŠYIVŠJRLHh“HwˆRN’GxŠwh7zNhIœxˆRGjnz3ŠWVZYŽ“HwJb‹AJbVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIš–hNMY’VLšJbRŽXxš–fšZšsI8IKV6ŠYbYn“CYf“d–nRG™GŽ3Ya3H‹aršJf+ŠYIVŠJRLH‹aršJ6–G6j‹sŸH‹aHwnŽ’KzXHRVMNX7JIRrbšnzhx’R8N4a™RkvŽY‰3Ža3H‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3HsœMNˆŸdIKaŸšˆb2YsŸ’sarwf6™YzXj‹VWNXaxšW6NrX–WRHWŠJIJbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7‹K‰Xw’h4H‹AWwnxŸŠhšfxJŸ8NJ“HAn7van‰‡‡ˆfyIdbG‹nzWGŽˆIŽI”dbG™Y8”ŽJ6CšŽIœ2bGaYzfN‹‰M‡W–ZIŽ’3ˆ‰fN‹Vv‡WI”AˆŽ6–rf‡4“C’W–ŸwJ‰G‹7”‹xˆšYWXšJ‰6wYIf‹v‰vIYRŽIYŽ6IGšWŽˆbk‡W–JAf–Ÿjf6’K“XwŽxw’NZwšYnŸbwWx‚AXIˆwn“MwKWYŽrMwŽ6sILšVjLrH‹x‚An‰njY7v™’‘WA+Vsaf6b‹’AZj‹JWYHb+ahf+x+ŽMN‹cWaLŽLa4IŸN‹6Ÿ4I+‹RLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹ad™‹a6™šVŠJRLH‹aršJf+ŠYbhxˆ“MNZhM‡ˆabŽLx2–W68‹KW8AW6’šˆbXxJNMN‹a”aJa6ŠYIVŠJRLH‹aršJ6’Lš2wfV8NKŸxšWr’ŠKW“ŽZ“8Y+Vhwnxn™Y62–X‹MYfAW–naŸšˆbwYz4YfAWnVGŽGryIˆ‰LH‹aršJf+ŠYIVHRšWNhI8IYRŸšˆbwYz4YfAWnVGŽGryIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbš–XfWšsIYIYxsAJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰“šZŽfN‹ŸvIYRGdb“NZVy‹‰J‡WIŠwŽ6IGšWŽˆbk‡WAŸvbGHK6fŽZ“C‡WAWwnŽ“HKIyNYa6šYf3šZŽfŠZŽxwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aH–R6N+rVHsœMNˆW8IŽ6ŸxnW8wˆšbwhb˜wVšKŸvHˆV”I‹zVHJf+ŠYIVŠJRzH‹ŽdIWfNHK“2‹JR”NhI8Af6’ŠKf2–Xf4YfInI‹fyNŽfv‡WIxAŽ“wˆ‰fšG66IYRKAnŽ6IK‰W‡4“C’ˆJZw‹‰6IGry‹4xWwŽ6kNh“™w+AZj‹JWaJ8”aŽffx4ŽM‡ˆMˆHvb6ŠˆfršJf+ŠYI3‹VrNˆWY–nxNHLŽVxJšŸNˆWna‹fyH‰8’WI2wLŽG’Y“fŽWRz‡ˆf3šZŽfŠZŽfŽZšWšYfœwˆŽfNY“yNŽš4’ˆ‹ZsR‚šJf+ŠYIVŠˆ‰L‹‹“Hwˆab™’aXj‹Vnš‹I™wna7‹Lr2–XxLaf6’YXš3‡ZNWwZR2aŽffaXŽ2j‹–WNKhJa‹M”+Ž‚xZš+‹RLH‹aršJb6wZš+‹RLH‹adIˆxGHLa“ŽJWLYKŸYIŽh4‹Lr2–XxLYXVY–Rxb™YbYsŸ+šŽšHwnŽ7‹Y‰‡HRV8š‹“xAJf+‹La“ŽZx8‹RInV7’Kz3‹Y‰LH‹aršˆŽZwˆIVŠJRLH‹aršJfwnWVŠˆ“bYŽIœjf6’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹–œIXŽ–‹œWwˆWahb’’Žz–K8ˆHJIaa‹zWX‹ˆŠJ7ZaZfaaŽh”A’ŽMGNW’nhˆa‹zzx4ŽMN’‹W’+N‚a‹zWX‹ˆŠJ7Wwvbxa’š’aha6ŠYIVŠJRLH‹aršJf+ŠYIVHs68šs“YjYV6ŠKV2wŽN4H‹“8AnV7ŽLI“HsVKYŽIHŽcvŽLaŽ4R8NKŸxwJ67‹KzfHRR4Hh“HwˆRN’GrNŽa3H‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLNˆWY–nxNHLŽVŠW7MN‹I8jhz‹aYš–fNMŽnJŸW6N’hafŽG“MN’VYŠKx7‹Lf3ŠˆŠMYf“k–s6ŸIˆI‡HRV8š‹“xAJf+‹La“ŽZx8HWx4HJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’ˆRLIYŽ“’LVW‹bLIYŽ+IYŽfNY“yŽJIkšŽIWIYŽ“‹nk”H‰4’ˆfyIdbG‹nzWGŽˆIŽI”dbG™Y8”ŽJ6CšŽIœ2bGaYzfN‹6L’ˆRXYŽ6HˆIWš‹aW‹Y‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹K62–X‹MYfAW–RVŽL6šj‹V˜šs“‡AnVbNˆAWYYRnaYsˆa’Ž‚‡W‘ˆ’dbZŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡xZ“MN’VŽšWfb™Gš2xWškNKfswYW33ˆz”HˆVbA‹b7wL–JAKWaf“‚AXš–ILšVjLrWaY6‚ALR‹ZŽ–AnWšŽZ“˜YK‹”™n6yšGfˆIŽI7Ž“šLrfGš‚šˆ‰LH‹aršJf+wˆIxHs68šs“YjYV6ŠK“Xwh6kšŽaswZNWŽnzba’I8hfNwnb3IK‰6wJzšZVw7ZwK‰4N‹“wY‰‹wYz2xnŸWaRR3H‹aršJf+ŠGRVx‹7MN‹“‡IKŠ4’YIHYn“CYf“d–nRG™GŽV’ˆWŽwYŽ6IL7”N‹bb‡WI7IGŽG™nIWŽ4xW’W–‚wˆŽ“ŠLVZwˆIVŠJRLH‹a‚A‹zZwˆIVŠJRLNJ“YYVwn6VxWkzNKW™–nRG™GŽVxˆx8šs‹WIf6ŽL6xwKzsNX7W–R6Ga’rHxWš˜YGfLWhv™GŽhxWšWšsŽHwn–v’GaVŠWV4NŽIJwRrGYK“2HsŸ8HWR‚šJf+ŠYIfIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbhxˆ“MNZhM‡Wcvšnzhx’ŽˆYhIYjfRwsW“ŽZx8‹Ž“H–na6šˆŸš–XfWšsIYIYx+–YbYsŸCHLfZšJ6’Lš2wfV8NKŸHxŽ6N’K6–ŠJR”NhI8Af6’4I+‹RLH‹ad™‹aLwˆIVŠJRL’f‚A‹a6ŠYIVŠJRLHˆfswY‰–wKWCN’ŽŸYf“™IKxNHK6‹JVMYh‰6’ZŠ”ŽWr8IYfWILŽGˆc”Ž4f”‡WI‡KŽGjnk”Ž4Ž8šYR‡šJ‰“Nˆff‹bLIYŽ+IŽR‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠWVŸYf“™IKxNHK6ŽXfMYhadjKx7HLr2wYaLNˆWYjK74ŽLfš–fŽJNŽI‹waaˆWLHˆšwY‰‹wnI–IJbVŠJRLH‹arA‹fRŠLfYR7zNˆJJšWfNHLfšYnbLahM”Ž’ŽIY‹WYGfnaŽ6+AXšVA‹–Was8WaYs”a’š–xˆcWaGRRaGrGI4‹ZI‹Ž+‹RLH‹aršJb6ŠhRhxˆ“ŸNXahjhfRŽXxš–fšZšsI8IKV6xr8HKŸ‚AXN‚wYfMIKzkaZV8Ihf–wŽ–Kbˆah“bšˆsœHJf+ŠYIVŠJRzHˆhœHJf+ŠYIVHs7zYYWœARfŸŠKWhŽ4ŽCšsI8IKV6ŠKŸYRVyNXVHwn–MHXŽŽwŽš˜NXaYjŽhvŽh6ŠˆI”NˆWYjK74ŽLfš–fšKNŽIxAsa6ŠYIVŠJ7ZŠˆfršJf+ŠYIVŠJRLNˆWY–nxNHLŽVŠW7MN‹I8jhz‹aYš–fNMŽnJŸW6N’hafŽ‹NMšs“VwJk4HKzX–XhzNˆW™wszGwnb‡jGILHh“‡wn–v™’RXw‹Ÿ8Y+V8Jb‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰“šZŽfN‹ŸvIYRšA2bG‹GrWŽWrv‡W–ZAnŽbŠYff‹4xv‹ˆ68AXIwnhZaZrLHYŸb’šwY‰šYG‘WA+V8ahhˆ–4Žš‡WAˆH4N”aYR’H+Ž2–fŠWYYW™aYV‹+Ž2wŽNWwˆWraGrŸHXšVA‹–Was8WHJ‰GIGŽfŽW6zŠˆb3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbšw’fˆNhIYnV6ŠKf2–Xf4YfInI‹f7‹LfhŽW“‚wˆRCwLr–AKzCa2‰MšJfZŽ3–ˆŸbwWx8ALVwnW“LšˆHG“bYŽIœjf6fY“z’ˆŽ”IGŽ’an6fŽWrv‡ˆWrYŽ’aVfšYRk’WIWIYŽGYLRrwˆIVŠJRLH‹a‚šWR7HKzhHRšŸNKfdnaHK“f‹Jx‚IXŽ‹wnJWaˆzCHŽ“8Jbˆwˆf‚’nŸLAKŸ8AXIwZa“HnŸbwWxbwnVswL‹J‹‹bVŠJRLH‹arA‹fRŠXr“Hs6ˆš+aašWVNn6Ys7MNŽAŸI‹fywŽŽbšYfˆA2b“HˆJ”ŽJ“WIŽAœšZŽGaŽy‹v‰‚šYRdALI‚šJf+ŠYIVŠˆ‰z’I‚šJf+ŠYIXHRš6NhI8hfYXR2w‹œMNŽAŸI‹fšnzhx’ŽˆYhIYjfRwsx“xWšCN’VnYVŽY‰‡xJ6ˆNXVœwRfGar+‹RLH‹adaJa6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aH–nRw6–Ž+ŽKYXVY–Rxb™YbYsŸ+šŽŽn–nx7HY‰‡–hŸ‚YfI™AffGHLa‹ˆa4H‹aHY7v™GaŽJšW‹fh–naŽKz‡jK‰YKWnAˆ–vŽYŸ3Ža3H‹aršJf7–sb+‹RLH‹arIhb6wJbVŠJRLH‹arA‹fyNYIWšYR™ALŽ“YG7”ŽWRMIŽA4AZŽfaˆk”w‹R6šŽ–JAfaCw7ZwKz6a4IMšJfwYhˆwKW‚YŽfMaG‘vw+šVaX–WYHbGah8ˆ‡4Ž“‹JcWNXV‹aŽfb’XŽ2xW‘WNKWYaY‰bŠ’ŽMj‹kˆHGR+a’x3a‹byŽZŽWšŽIA‹a”HJf+ŠYIVŠJRzH‹ŽdIWfNHK“2‹JR”YYJŸIKVŽK“2‹V6NX7ŸAW6GxLŽVHRVŸšRINwˆ‰“KŸM’V8I+I–wL‹J3ZrLHYŸ”I‹84wKW‚ŽnzvAKŸ8wYRCILšVjnWšŽZ“˜YKŽ6RyšYbWIYRŸwˆŽ“Nˆffw‹R6šŽ–JAKŽfNY“yŽZŽWšŽIA‹R‚šJf+ŠYIVŠˆ‰L‹‹“‡wnx7ŽLf2‹VkNˆŸ‡nŽ’xn‰ˆaŽx8w’‹Zwn6VYnz”HZš‚Y‰–wKIvwKzvaˆŸ‚AˆR7wKW‚ŽnW8NhxI’xxHJf+ŠYIVŠJRzH‹Žd–nR7HLšh–JWL‹f“kf6NŠXr“Ž4fWH‹‰bŽYWfGšv‡ˆR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wZR–Iˆ‰LH‹aršˆa7ŽKf2xˆzCH‹I–YVb’Xr“Ž4fWH‹IhwnxRaGšxWš˜‹YŸ8xnRŽK6“–fš”HJaHY7v™GaŽJšWHWR‚šJf+ŠYIfIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbhxˆ“MNZhM‡Wcvšnzhx’ŽˆYhIYjfRwsVhHRVŸHJahKRŽK6“–fš”HLfZšJ6HLš2–L“8YŽAJ3Jk4‹LfhŽWŽ’ˆfhwŽfGj6‹ˆaM’ZI‚šJf+ŠYIK‹Y‰3H‹aršJf+™R3šˆ‰LH‹aršJf+wˆAWA‹–WaYuvI’ŽMGNWYhabaŽh”IXŽ–IYMWas8WaŽffa4ŽM–KMˆH’N4aŽh”Ž4š3a28WNŽa7aY7vŽ+Žšw‹œWNhIŠaYVbŽXŽ‚w‹sWAf‡ahfzŠ4‹JH4Ž3’WIWIYŽGYLR+JbVŠJRLH‹arA‹fRŠLIšYs6kNfarWfb™Gš2xWškNKfdY7v™GaŽJšWH‹“HjYxGYn‰‚NY6Aszvwnkˆ3ˆŸLAKŸ8+IˆwKW‚ŽnzvAKŸ8wYRCILšVjnWšŽZ“˜YKŽ6RyšYbWIŽ–JKŽG‹7”š‹aWšŽI7IHbfNY“yŽZŽWšŽIA‹R‚šJf+ŠYIVŠˆ‰L‹‹“‡wnx7ŽLf2‹VkNˆŸ‡nŽ’xn‰ˆaŽx8w’‹Zwn6VYnz”HZš‚Y‰–wKIvwKzvaˆŸ‚AˆR7wKW‚ŽnW8NhxI’xxHJf+ŠYIVŠJRzH‹Žd–nR7HLšh–JWL‹f“kf6NŠXr“Ž4fWH‹‰bŽYWfGšv‡ˆR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wZR–Iˆ‰LH‹aršˆa7ŽKf2xˆzCH‹I–YVb’Xr“Ž4fWH‹IhwnxRaGšxWš˜‹YŸ8xnVwn6“–hš6NhIŽwJ6HLš2–L“8YŽAJAsa6ŠYIVŠJ7ZŠˆfršJf+ŠYIVŠJRLNˆWY–nxNHLŽVŠW7MN‹I8jhz‹aYš–fNMŽnJŸW6N’hafŽ‹NMšs“VwJkv’La“ŽJŸvYŽI‡AW6’NZaVŠWV6NX7ŸAW6GxLŽŠjYŠMNˆŸYws6˜wˆŸw‹š4N4VŽwhb‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰“šZŽfN‹ŸvIYRšA2bG‹GrWŽ4a4IY‹Z2bG‹G7”šŽŽz’ˆRhAnŽ6’ZŠ”ŽWr8IYfWILŽGˆc”Ž4f”‡WI‡KŽGjnk”Ž4Ž8šYR‡šJ‰“Nˆff‹bLIYŽ+IŽaCwVvwKzbNYIMŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡xJ6ˆNXVœwRfGanIšw’fˆNhIYnV6ŠXrXwfš8ahbw4‹ˆ‹4NWNKŽŸa’IW‹+ŽŠZNWaŽa‚a’Žzx’Ž“aX‹WYKW‚a4IŸ’Ž6bxLaX–f“‚wˆRCwLr–AKW4A‹“bwhfwnb33ˆŸ8Hˆ6wY‰‹wVvwKzbNYI3H‹aršJf+ŠGRVx‹VŸYf“H–YabanIšYs6ŸYŽ“”š4š–‡W‹WYLŽfaŽfŸxXŽŠZ7ˆHGR+a’x3a’Ž“‡4‹ˆ’sIka’Žzx’ŽMŽZAWaZŽRŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹VYf“H’ˆ7v‹KzX–skW‹fAWRfbjnzŠˆI”YYJŸIKVŽK“2Yb3H‹aršJf7AJbVŠJRLH‹aršJf+ŠLfYR7zNˆJJšJ67‹K‰“YsWJ‹nMŸwf6N‹h‰2–fV8N4r‡aŽRN‹XrXYIYfAWRfbjnzŠˆa4H‹aHY7v™GaŽJšW‹fh–naŽKz‡jK‰YKWnAˆ–vŽYŸ3Ža3H‹aršJf7–sb+‹RLH‹arIhb6wJbVŠJRLH‹arA‹fyNYIWšYR™ALŽ“YG7”ŽWRMIŽIŠA2b’aZrf‹VbIYŽRAŽ“šrf‹‰J‡WIŠwŽ6IGšWŽˆbk‡WAŸvbGHK6fŽZ“C‡WAWwnŽ“HKIyNYa6šYf3šZŽfŠZŽ’KzvAKŸ8wYRLAsa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHhI‡IK7vjnzšŽ4xLYYJŸIKVŽK“2‹7MNˆŸYw+š3xˆuWaf–ˆaŽh”IXšVxˆsWaRaba’Žzx’Ž“aX‹WYKW‚a4IŸ’Ž6bxLaX–f“‚wˆRCwLr–AKbWH’a8XN‚wˆIAKŸkHˆVwY‰‹wVvwKzbNYI3H‹aršJf+ŠGRVx‹VŸYf“H–YabanIšYs6ŸYŽ“”š4š–‡W‹WYLŽfaŽfŸxXŽŠZ7ˆHGR+a’x3a’Ž“‡4‹ˆ’sIka’Žzx’ŽMŽZAWaZŽRŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹VYf“H’ˆ7v‹KzX–skW‹KJŸKxN’K“šwG“8HJaHY7v™GaŽJšWHWR‚šJf+ŠYIfIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbhxˆ“MNZhM‡Wcvšnzhx’ŽˆYhIYjfRwsVhHRVŸHJahwY7v’XRX–hš6NhIŽwhz+ŠYbšw’fˆNhIYnVC™nŸhHskzYfaXahkvYK“2HsŸ8HLf”aJa6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹xbwJzwY6“aˆWbHv‰8Jb2wŠZ’nŸWad‰‚šW6vwK“3NKWNŽ“‚LVKwnkWNK‰vAXI8AsfKwš‹nz6Y’a8AWh‚wŽYnW6Y‹xbwhfwˆf‚’nŸLAKb‚aYsˆa’ŽwY‰3‹Y‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹Kf2–Xf4YfInI‹fHLš2–L“8YŽAJšˆx7HXRšYfkA‹‰fZŽWŽ4a4IY‹Z2b6ŠKWWš‹ŽMIYŽ“s‰GIGŽfŽW6z’v8œhInV7’KMˆHJI‚a’š’aXŽvHˆcWAf‡ahfN’‹J‹ˆJWaGRRaYsˆa’ŽwY‰+‹RLH‹aršJb6ŠhRXwŽNMšR“‡I‹fxLfXw‹NWH‹‰63ˆzyŽˆVIŽIanŽG‹Gs”‹bLIYŽ+IYŽGILŽfG“‚šYŽ“s‰“ŽLayš’IkŠY‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vanAˆYfaah8”IXŽ‚AY7WYY‹ˆaYVŸŠ4Ž2’ŠW’dbkaY‰Iha6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanI–fNMŽnJŸW6N’hafŽŽ6ˆY’aYjf6G‹Y‰‡xJ6ˆNXVœwRfGar+‹RLH‹adaJa6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aH–nRw6–Ž+ŽKYXVY–Rxb™YbYsŸ+šŽŽn–nx7HY‰‡–f6ˆY’aYjf6G‹YŸ–ŠJR”YYJŸIKVŽK“2X“šs“‡–Ž6’N4š‡–f6kNh“™ws6Ÿ4I+‹RLH‹ad™‹aLwˆIVŠJRL’f‚A‹a6ŠYIVŠJRLHˆfswY‰–wKWCN’Ibw‹8‚wnb3NKzCa2‰”I’šNwG‹WAKz6AY6bwKRNwˆ6všKzCaYV‚AL7ZwrVšKzˆYfr8Žh4waš3ˆzWYf“bŽfswYŸVwK‰6wJzšZV”w4Ž“aX‹WYKW‚HWR‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠWV6NX7ŸAW6GxLŽVxJ6ˆNXVœwRfGanIhHskzYKŽ6RyšYbWIŽIŠA2b“aˆWWŽJbz’ˆŽ“s‰GIGŽfŽW6z’v8œhInV7’KMˆHJI‚a’š’aXŽ–‹œWYHbˆaGVWN’ŽšAYuWaGRRaYsˆa’ŽwY‰+‹RLH‹aršJb6ŠhRXwŽNMšR“‡I‹fxLfXw‹NWH‹‰63ˆzyŽˆVIŽIanŽG‹Gs”‹bLIYŽ+IYŽGILŽfG“‚šYŽ“s‰“ŽLayš’IkŠY‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vanAˆYfaah8”IXŽ‚AY7WYY‹ˆaYVŸŠ4Ž2’ŠW’dbkaY‰Iha6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanI–fNMŽnJŸW6N’hafŽhŸCNˆJŸAˆVxKf2xWŽ‚HhI‡IK7vjnzšŽ4xMŠˆfršJf+ŠXI+‹RLH‹aršJf+ŠYIXwŽNMšR“‡I‹f+‹Xr“xˆz˜’RŠWšfkvŽXr‹w’f”Yf“™ŠˆŽŽxXrhHsf‚HXa™Kab™Ga2xJš6NhIŽwhz+ŠYbšw’fˆNhIYnVC™nŸhHskzYfaXahkvYK“2HsŸ8HLf”aJa6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹xbwJzwY6“aˆWbHv‰8Jb2wYŸVwLr8N2‰bhfZŽ‚IKbWaˆVbwKRNwˆ6všKzCaYV‚AL7ZwrVšKzˆYfr8Žh4waš3ˆzWYf“bŽfswYŸVwK‰6wJzšZV”w4Ž“aX‹WYKW‚HWR‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠWV6NX7ŸAW6GxLŽVxJ6ˆNXVœwRfGanIhHskzYKŽ6RyšYbWIYRXYŽbŽLN”N‹W6šŽ–ˆHb’aZxWšYRk’WIWIYŽGYLRy‡4“CxW6kNh“™w+š3xˆuWaf–ˆaGV3+ŽMj‹kˆYfA‚aY‰ŸHXŽ–A‹MW’‹va’Žzx’Ž“aX‹WYKW‚ŠˆfršJf+ŠYI3‹VrNˆWY–nxNHLŽVxJšŸNˆWna‹fyH‰8’WI2wLŽG’Y“fŽWRz‡ˆf3šZŽfŠZŽfŽZšWšYfœwˆŽfNY“yNŽš4’ˆ‹ZsR‚šJf+ŠYIVŠˆ‰L‹‹“Hwˆab™’aXj‹Vnš‹I™wna7‹Lr2–XxLaf6’YXš3‡ZNWwZR2aŽffaXŽ2j‹–WNKhJa‹M”+Ž‚xZš+‹RLH‹aršJb6wZš+‹RLH‹adIˆxGHLa“ŽJWLYKŸYIŽh4‹Lr2–XxLYXVY–Rxb™YbYsŸ+šŽŽœIKVbšsx2xˆzCN’VnYVŽY‰‡xJ6ˆNXVœwRfGar+‹RLH‹adaJa6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aH–nRw6–Ž+ŽKYXVY–Rxb™YbYsŸ+šŽŽn–nx7HY‰‡–L“ˆNKWXIRhvjrš–LxkYYWœws6ŸIˆI‡xJ6ˆNXVœwRfGad‰‡–WVŸšRIŽwh‰6šnWšŽZ“˜YfaXAs‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰LaGR+a’Ž‚–L‹WAnfˆaŽ6+w’Ž–’NWNHba’š+ŠXŽšj’NWA+V8ahhˆ–4Žš‡WAˆH4N”aYR’H+Ž2–fŠWYYW™aYV‹+Ž2wŽNWwˆWraGrŸHXšVA‹–Was8WHJ‰GIGŽfŽW6zŠˆb3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbšw’fˆNhIYnV6ŠKf2–Xf4YfInI‹f7‹LfhŽW“‚wˆRCwLr–AKWbHv‰8AXx2wK‰VHnzC’VwY‰‹wVvwKzbNY6ˆIhfœwŽfGj6šYfkA‹‰fZŽW‹4xCšYRšA2bGIK“WšYILšŽIaIGŽfNY“yŽZŽWšŽIA‹R‚šJf+ŠYIVŠˆ‰L‹‹“‡wnx7ŽLf2‹VkNˆŸ‡nŽ’xn‰ˆaŽx8w’‹Zwn6VYnz”HZš‚Y‰–wKIvwKzvaˆŸ‚AˆR7wKW‚ŽnW8NhxI’xxHJf+ŠYIVŠJRzH‹Žd–nR7HLšh–JWL‹f“kf6NŠXr“Ž4fWH‹‰bŽYWfGšv‡ˆR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wZR–Iˆ‰LH‹aršˆa7ŽKf2xˆzCH‹I–YVb’Xr“Ž4fWH‹IhwnxRaGšxWš˜‹YŸ8‹ŽfN’L6h–XfŸYhaLWfb™Gš2xWškNKf”HJf+ŠYIVHa3H‹aršJf+ŠYIVŠJVŸYf“H–YabanI‡HRV‚NŽ“aIRr8™YŸYRVyNXVHwn–MHXŽxYR7MNˆfLwKaxL6X–ˆxˆNˆWxwhz+ŠYbšw’fˆNhIYnVC™nŸhHskzYfaXahkvYK“2HsŸ8HLf”aJa6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹xbwJzwY6“aˆWbHv‰8Jb2wŠZ’nŸWad‰MšJfZŽ3–ˆWNŽ“‚LVKwnkWNK‰vAXI8AsfKwš‹nz6Y’a8AWh‚wŽYnW6Y‹xbwhfwˆf‚’nŸLAKb‚aYsˆa’ŽwY‰3‹Y‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹Kf2–Xf4YfInI‹fHLš2–L“8YŽAJšˆx7HXRšYfkA‹‰fZŽWŽWrv‡ˆfdwGŽfxGrWšYRk’WIWIYŽGYLRy‡4“CxW6kNh“™w+š3xˆuWaf–ˆa‹z6’XŽš‡ZNˆH‹I“a’x’w’‹WA‹‹WN’NWaŽ6bwJa6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹InjYabxXŽV’ˆh‚ws‰GNKŸWŽJWkšŽIxAHb6HˆIWš‹aWšŽIˆIYŽ6jn‰fšYRk’ˆRYAJ‰faˆ“rwˆIVŠJRLH‹a‚šWR7‹K‰Xw’h4NZfdxKŽ’KzXHRVMNX7Jš4š‹WkˆHvbˆaY‰zNXŽšš’NWNLf+aYV6a+Ž–‡ˆcWwJIˆŠˆfršJf+ŠYI3Y‰ˆŠˆfršJf+ŠLIhŽJ64NŽIašW6ŽLŽš–WVMNX7JšWkvŽXr‹w’f”Yf“™ŠˆŽY’Kz2xWšCšsIYJb+‹Kf2–Xf4YfInI‹bxwˆIVŠJRLšGI‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹R”šsIkAnaŸ–dbN–Kx8šs‹WIf6ŽL6xwKzdšs“Hj‹b+š6ŽZ“8Y’aHwR6+NZaVŠWV6NX7ŸAW6GxLŽŠjYŠMNˆŸYws6˜wˆŸw‹š4N4VŽwhb‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰6’ZŠ”ŽWr8IŽIXA‹‰“’Yc”ŽZŽbIŽIhJ‰“šˆc”š‹aWšYŽ“s‰“HKIyNYa6šYf3šZŽfŠZŽ’KzvAKŸ8wYRLAsa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHh“LšˆRGa’rŽˆx8NˆfdY’Ž–fsWA‹a7ŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡HnbLNŽAW–R6GšnzX‹VaŽkv‹’ŽzŠJ“+‹RLH‹aršJb6ŠhRXxJšŸYŽAMšJ6xXrhHsfLYŽ“‡jŽfNˆAWwZf7aYsˆN’Žšj’‹ˆYŽI™aYVš’Ž‚ŠˆœWYHb3aŽf+™+AZj‹JW’nfra’IW–+ŽMŽZAWaZŽRa4IŸ’’Ž2xˆ‹WwJaa’Žzx’ŽšŠ4cW’nhˆaYV6x+Ž2ŠW‹WYXš–aGrf–f6bxLaX–f“”I‹zvwGazHnWHYŸ8šJzœ–naŽKMW’nhˆaY7”xXš“x4AWAf‡aŽf+™+AZj‹JWY‹–œa‹z6aXŽ“–fcWaLfba‹z6j’ŽMš’7WYHbˆa‹Mv34‹W‹ˆuˆY‹a“affG’X‹ˆjYW3IŽ–Zwvb“NLN”‹4IW‡ˆRR2bGInM”šGaMIŽ–JAˆI‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠW7JNfIZšˆ–4‹Lf“Ž4ŽH‹‰Gˆ6fšŽŽz’WIœ2bGaYzfšYRkxK“™ŽsR‚šJf+ŠYIVŠˆ‰L‹‹“‡wnx7ŽLf2‹VkNˆŸ‡nŽ’xn‰ˆaŽx8w’‹Zwn6VYnz”HZš8whbCwZ7ˆYnzYhxbwJfKwKIvwKŸbwWxbŽfswYŸVwK‰6wJzšZVw7ZwK‰4N‹“wY‰‹wYz2xnŸWaRR3H‹aršJf+ŠGRVx‹7MN‹“‡IKŠ4’YIHYn“CYf“d–nRG™GŽV’ˆWŽwYŽ6IL7”N‹bb‡WI7IGŽG™nIWŽ4xW’W–‚wˆŽ“ŠLVZwˆIVŠJRLH‹a‚A‹zZwˆIVŠJRLNJ“YYVwn6VxWkzNKW™–nRG™GŽVxˆx8šs‹WIf6ŽL6xwKzxNXa™Anxwš2YI”š‹aZšJ67ZaVxJšŸNˆWna‹f+‹K“hHRVŸ‹RšJšsz+ŠYbfx4R4‹RAW–YVIZr+‹RLH‹adaJa6ŠYIVŠJRLH‹aršˆRGYYI3ŠJŽ”š‹AzAJb’ŠXI+‹RLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆ“‡Hn“JNhar™‹f+‹Xr“xˆz˜’RŠW–YRYšrxˆx8šs“awJb’ˆIfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIXwŽNMšR“‡I‹fnInxyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJfwnW3HsVŸYfIhšKVGxXrš–K“KYŽIœAJb+NZšŠxLxf‹nMMAf‘vHLšhŽ4Ž”NZkMŽ“nAˆ‰NxWRvHWaZwW“‹GV3ŽL“hYsš4wW“‹GV3‹ZI‚YsIxAhbYjnxVwxf‹nMMAŽr˜aš“‹ˆa4H‹aHanVGIZaVŠWVJYŽ“HKRŽL6–ŠJVxŽYbYHRcz’hšYxXfŠŽYbHxfŽ6ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arW6Gjnz2ŽWšWšs“ašWr’ŠKVNŽa3H‹aršJf+ŠYIVŠJRLH‹aršW6b™GfŽJšCN‹arwJ6–Y“hxJŸ‚Yf“ašWfN’YI‡xˆMMYfAMAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3ŠW7J‹nkMˆRN‹Kz2ŽLaœYRarw‹66ŠYbfxAŸHhI8–R6G–YVa–’rLHKfššJ67vbŠ‹WVMšsIYIRI˜HKxVŠWfbH‹aHaŽrs–nb“YRV8Nfš4–R“’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLYKJŸjŽ6GxK6“ŠJR‚HhIn–nx7HYIšYsWLHhIn–nx7HKš2w‹šJYfar™Žr6ŠYbhw‹š4šRIŽAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹adAR66ŠY‰“YsŸKYYJŸIKV+šˆbhw‹š4šRIŽAsbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠ4“ˆYKWnAˆ–vYnbW’VbAZR7wYŸVwKzL’6ˆIhfœ–naŽKMW’nhˆaY7”xXš“x4AWAf‡aŽf+™sa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚Hh“nV7ŽKz3Ya3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚HŽ“djŽ6Gšnš2ŽJNMY’VLwJ6Ÿ™nŸ–ŽVkšs“HjŽcvaY“2ŽWŽWHLkMŽAzanfN‹Z–‚HYhŸAs6ŸIˆI‡xˆMMYfAzNhWn–aVŠW7MYfAzIJb’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVxJŸˆNKŸHAnVŽKzVxshZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršW6Gj6Ya3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚HŽ“djŽ6Gšnš2ŽJNMY’VLwJ6Ÿ™nŸ–ŽVkšs“HjŽcvaY“2ŽWŽWHLkM‹f6™Gr‡jGILHhI8–R6G–YVaxXr4H‹aH–R6G–GI3‹ˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I™IKV‹Lr2wfš8H‹xVaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹IYAˆ–vŽXI+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwˆRN’KšX–WVŸNŽAWwhb+‹XVšŽZczYfa”AnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹b+xL6hxJNMNŽIaah‰8™GrX–’fJYŽ“HKRn™Y“hHRVŸHJaHAnxŽLxGjhVh’sadNh6xXrhHs6KNKWnIR6‹–db‡HR6kNh“YwR“’ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVCNX7W–nRGa’R‹JRŸ’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfŽLaX–fNZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIš–XfWšsI8IYxGŽYIaLa3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”YfIœwnVGŽLŽhHsŸ2YRar™‹faYzhj‹7WNŽIœ–YaIN–hš”YYMŸwnVŽLxŽ4‹MHJaHAnxŽLxGjhVh’sarˆxrXjY8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLNˆWY–nxNHLŽVŠWV8NhIYIR6Ga’rXjLa3H‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLYfIœjf6NAJbVŠJRLH‹aršJf+ŠYIVŠJRLNˆWY–nxNHLŽVxLxh’ZI‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’ˆRLIYŽ“’LVW‹bLIYŽ+IYŽfNY“yŽZ“IYRrAdb6’ZŠ”ŽWr8IYfWILŽGˆc”Ž4f”‡WI‡KŽGjnk”Ž4Ž8šYR‡šJ‰“Nˆff‹bLIYŽ+IŽaCwVvwKzbNYIMŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡xJNMšs“‡ARfŽXrYsWLYŽ“‡jŽfNˆAˆHGR+a’x3a’‹WA‹‹WNhIfaY‰+wXAZj‹WšYR7MNZŽ’aŽWŽZ“IYRrAdbG‹Y6fšYŸ4’v8œh“nV7ŽKMW’nhˆaYVš’Ž‚ŠˆœWaGRRaŽf+™+AZj‹W2xˆzvYKŽ’aŽWNŽfv‡WIxAŽ“wˆ‰fšG66IYRKAnŽ6IK‰W‡4“C’ˆJZw‹‰6IGry‹4xWwŽ6kNh“™w+‹ZHv8WYYŽaG‘”w+š3‡ˆhJasa+ŠˆfršJf+ŠYI3‹Vkšs“Hj’Žš‡ZNˆY‹a‡aŽf+™+ŽMj‹kZaZf“NŽAWW6NK6LH‹NMYf“k–+ŠJŠJVXwŽš˜NXaYjŽhvŽGx“ŽWxCšJfnKVxL6X‡J‰ršW“dRhvIn“–f“CšJfnK7va’rŽ4‹M’RIHwn–v‹n6LH‹šCN‹IYKsvxKf2xW“CšJfnKRŽK6“–fš”a+x+Šfhvjrš–LxkYYWœw+ŠJŠJVŽ4ŽkYYWœwR6y’JRLŽW6ˆY’aYjffGHLaš‹‰ršWIIfh4ŽL6ŽWxCšJfnjfh4HLš2xZ“kYYWœw+ŠJŠJV2x4fWYLhzKVwn6“–hš6NhINKIVxLIšYsŸ˜š+7ŸjŽ6y’JRLYsŸ8NhIYKxŽKb+‹RLH‹aršJb6ŠhRXwŽNMšR“‡I‹fxLfXw‹NWH‹aHnx7‹Lf“ŽJkzšsINZŽ–AKzCYf“”I‹bvwˆf‚’nŸLAKŸbw+I2wZNWŽnzba’I8hfNwnb3IK‰6wJzšZVw7ZwK‰4N‹“ˆIhfCwnkˆ3ˆ‰La4a8As6vZŽ3ALšˆHYŸwY‰‹ZŽVxnŸWaWxbwnVswL‹JŽšˆHGI”YŽ“H–nabwnfhYRV8a‹z6aXŽ“‹ˆsW’nfzahfzŠ4‹JH4‹WNhIfaY‰+wXŽMš’7ˆ’dbŽaŽ6Wš’Ž–A‹JWaZ‹MaGrGI4Ž‚–L‹ZaZfaaYuˆ‹4ŽšŽcˆN‹AˆaYVz‹+AZj‹hWARIZa’IWx’‹WA‹‹ˆYfaWaŽ6+’XAZj‹kW’nfyHhIn–nx7HLršwfNMYKŽ’™n‰yŽJšMšYŽ“s‰’anIyNYIJ‡v8œh‰GZaf’rMšYh‚ws‰GNKŸWšGrWIYRYAJ‰faˆ“rwˆIVŠJRLH‹a‚šWR7‹K‰Xw’h4NZfdxKŽ’KzXHRVMNX7Jš4š‹WkˆHvbˆaY‰zNXŽšš’NWNLf+aYV6a+Ž–‡ˆcWwJIˆŠˆfršJf+ŠYI3Y‰ˆŠˆfršJf+ŠLIhŽJ64NŽIašW6ŽLŽš–WVMNX7JšWkvŽXr‹w’f”Yf“™ŠˆŽŽxXrhHs6MYYŸY–R6N’Y‰šYs6ŸYŽ“”šJ6xXrhHs6MYYŸY–R6N’Gr+‹RLH‹adaJa6ŠYIVŠJRLH‹aršˆRGYYI3ŠJšMN4sŸnaHK“f‹ˆI”YŽ“H–nabwnfhYRV8NZf”AnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7MN‹“‡IKxŸŠLŽYnaL‹f“kf6NŠXr“Ž4fWHJaXWfN‹XrXwYz6šR“HwnaŸxnzCaszbwnVsAnz‡wK‰va2‰ˆIhf˜wNJYr‚NLš”I‹zvwYz2xnŸWaRRHWx4HJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJ6YLrXwhœMH‹ŠMšWh4ŽLfXwŽšWšsaLWfN‹XrXwYz6šR“HwnaŸ4I+‹RLH‹aršJf+ŠYI–jH‰bw‹8‚wnb3NKbWH‹xI’I‹wYz2xnŸWaRR3H‹aršJf+ŠYIVŠJR”NŽ“™ŽnRGaYŸ2xWŽL‹RadwŽfGj6Ža3H‹aršJf+ŠYIVŠJVMYKfrwJfGw6N–hšŸNˆWna‹b+‹KW“Ys6˜šsa”AnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJR”YŽ“H–nabwnfhYRV8NZfr™‹fnAˆbšYR7MNˆW8YxN‹KzX–’‘ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+‹LrX–‹ŸMNKWhAW6’Š’fVHRVŸšRIŽaJa6ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJf+‹LšXHRVMNX7Wjhfs–nIGjYx4NŽIJws6ŸIˆŸ“Ž4Ž”Yf“Lwhz+š+rYncMHLfZwKabŽL62–WšŸY’VŽInRG‹YŸ–ŠˆxCNhInjKaŸNZa‡–JVkY’VJRkvŽYŸ–ŠˆxCNX7W–R6Ga’r–ŽWV8N4Vawhz+šn6“xWšCN’VnYVŽYŸ–ŠˆxCN‹IYKsvŽKb‡jGIY’VœARhvIn“šwG“8HLfZHJf+ŠYIVŠJRLH‹aršJf+ŠYI‡–fšWYŽI‡AW6G‹YŸ–ŠˆxbNXV™–Y–vxKf2xWŽ’sahwY7v’XRX–fš”HLfZwK–v’Lf2–L“4YŽI‡AW6’NZa‡–L“ˆNKWXIRhvjrš–LxkYYWœws6ŸIˆŸXxJš˜N4ahIKab‹YŸ–Šˆx˜YfIœwRh4‹KzŠˆxh’ZI‚šJf+ŠYIVŠJRLH‹–œIXŽz’JsWAdb8aYVš’Ž‚ŠˆœWAnfˆaŽ6+w’Ž“ahJWARAMŠˆfršJf+ŠYIVŠJRLYKJŸjŽ6GxK6“ŠJR‚HhIn–nx7HLršwfNMYf“ašWfN’YI‡xZx8šŽŠM‡J6w+rŽ4rMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠKW2–J68YŽI™wJf+šˆb“YRV8NfadnaŸŠYbšYR7MNˆkM‡J67YK“2HRš8HW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆ““Ž4ŽKYŽ“‡jŽfNˆ‰‡xJNMšs“VAJf+‹LšXHRVMNX7Wjhb’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšsIkjY74NˆI2wŽN4H‹ŽYaRhvŽLIhxˆzˆNKfLwXŽš‡J–WARIZaf6’YXš3‡ZNZaZfaaGrfš4Žz–K8WNhIfaY‰+wXAZjYR‡j’x”YŽ“H–na64I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYI“ŽWfLHJIYIna7‹XŽ3ŠWVMšsIYIRIŸša“ŽZx8HXsMAsbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+‹K“hHRVŸNŽI‡–YxŽL6GjŽVvYf“8šRIŸša“ŽZx8HXsMšWr’ŠKWšŽZ“˜Yfx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹adwnV7’KzfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xJNMšs“‡ARfŽXrYsŸ2HhIJwnŽY–YV‡–L“MN’VŽwf“’Š’fVHRVŸšRIŽaJa6ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJ7ŸŠˆI‚šJf+ŠYIVŠJRLH‹aHanVGIˆIŠ‹JR”šsIkAnaŸ–dbhŽˆzNNŽIHwf6N‹L63Šˆ8ZŠˆfršJf+ŠYIVŠJRLHh“‡wnx7ŽLf2‹sŸH‹šJšs‰ZwˆIVŠJRLH‹aršJf+™NWNXšza’ŠˆIXŽz‡W‘W’nfra‹z6A’šVA‹–Was8WŠˆfršJf+ŠYIVŠJRLYKJŸjŽ6GxK6“ŠJR‚HhIn–nx7HLršwfNMYf“ašWfN’YI‡xZx8šŽŠM‡J6w+rŽ4rMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYb2–h6zYfI™–RRNHLfVx+rLŽ4sMaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠ4“ˆaY7ˆA’‹JaLNˆHGR+a’x3a’‹WA‹‹WAHbŠa‹z6Š’Ž–GsWNhIfaY‰+wha6ŠYIVŠJRLH‹aršJf+ŠYIVxW6ˆNˆWYRhvšˆI3ŠWVMšsIYIsfxL6VŠWVkšs“HjŽr‹anbhw‹š4šRIŽAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3xˆzWY+VnjYabxXŽ3ŠWVkšs“Hj‹z+ŠKV‡–L“MN’VŽwf“’ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹I™IKV‹Lr2wfš8’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLNŽIššJb+‹LššwGr8Y’aHŠKaHGrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aH–nVNŠhVXwhfL‹RadNf“‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVbNXa‡wRfG’K‰VŠˆI”NXV‡AŽ6G’XrxYs6ŸH‹Injhf+‹LššwY‰MšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”NKJŸW6’Š’fVŠWVˆYYW‚IRrbaGšxWššNfIZwJb‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJ67‹LxXŠJsŸH‹aHAnxŽLxyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXR2whŸ8šsaLˆx–GIGjYx4NŽIJwskz–ryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚N4aHnxwn6yLrKNŽ“™šKVGxXrš–K“KYŽ“H–na6šˆb2w’f”YfaZšJ67‹LxXŠˆbMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJ67‹LxXx‹šŸNˆzJšsfs–nI‡x4f6NY64HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwJf’‹Xr2YsVdNˆŸVAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹adYabŽK““j‹RŸ’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”NXV‡AŽ6G’XrxYs6ŸH‹ŠMšJ67‹LxXx‹šŸNˆ64HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹IYAˆ–vŽXI+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLNŽIššJb+‹Xr2YsRL‹RarˆxrXj’‘”Y+VhwnxRaGšxWš˜‹YŸ8’YRGInzxYR7MNˆfLWfN‹XrXGILHh“nV7ŽKz–ŠJR”NŽ“HwnVYAˆŸ2xˆzvYfahšsz+ŠYbfx4R4HWa”šˆŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arˆ7vHLRŽJœM‹Ž“‡j‹fs–nI‡HRVJNJx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLYfIœjf6NAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršWfHKzšŽZaL’Y64HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYI‡Hs68šs“YjYV8Aˆb“–fNWYRar™‹f+‹LššwGr8Y’aHŠKaH’I+‹RLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVxˆzbH‹aLˆRN’fx“Ž4ŽNhIŽAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJVŸYf“H–YabanIšYs6ŸYŽ“8šKa™GI3ŠWVŸYf“H–YabaryIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJVŸYf“H–YabanI‡Hs68šs“YjYVCAJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰“Žn6f‹4f’ˆRaYŽbŽGVLwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹arˆsvŽXŽš–Xf”YfadAnV‹Kz–fšŸH‹‰“’YffwŽŽvIY‹œwŽfšˆIf‡4“C’ˆWsA‹‰GHY“WN‹W6šYWŽALŽf™nzWšYILšŽIbšZŽ’anfZwˆIVŠJRLH‹a‚š4ŽMI’‘WNŽa“N’VYaŽhv™YbšYfšˆ‹”™nWb+rhHsV˜’ˆhœIf6ŽXVŽZ“ˆNJIYj‹zbxLŽHs6ˆNŽIxIŽhv™Gx––J68YKWYjŽ6GaY6‹4fkNKWHjY7vwnb––W6MYf“XIf–vŽXŽHYR68NKŸxIYR7‹Lx2ŠY‰LH‹aršJf+wˆAWwˆfGa4IŸNYR7‹XrXHsJˆ’hŸYV™YŸ–w‹Ÿ˜YhAJIYVbŽXr––L“ˆšnWYšKŽ7’L“––hšŸšsI8KVŽGšxWNMYŽI8AˆaŸ™+aafsv’JxXjh‰xwˆIVŠJRLH‹a‚šˆsvŽXŽš–Xf”YfRwnb3IKbWYYb3H‹aršJfs’‹6’x’f™‹fasAnz3asbVŠJRLH‹xxHXš–‡W‹WYLŽfaf6’I‹a6ŠYIVŠJszŠˆŽ“HK8”Ž4“L’ˆR–A‹‰G‹Š”Ž4š8’ˆŽŽA‹R‚šJf+ŠYI™šˆŸbhf–wYzz–ˆŸ8’R“‚AX‹MHJf+ŠYIVxshMŠˆŽGYŸWŽJb‚’ˆWKAvbbHn6ZwˆIVŠJRL’Y6ŽHXšw‹œW’+Vyafk”jXšššŽr+‹RLH‹arj‹ŸLwKŸ8’R“bIGrsAnz3asbVŠJRLH‹xV–JafN‹zCšYŽnAd8”™nfywYaL’ˆfbšˆŽGNZRyšYVW’ˆRXIGŽGaKzyšŽŽz’ˆW7hu”™nfxwˆIVŠJRL’K6VHXš–afŠWYŽI8a’šbaXŽzŠ4“+‹RLH‹ar–hŸrwKW6Yfr8IhfswGxš3ˆ‰Man68wYRLHJf+ŠYIVxRhvŠˆŽGNKŸW’fMIYR™wZŽ6n6rwˆIVŠJRL’K6XHXŽšYAˆYKW”ŠˆfršJf+Š’xašˆŸ‚XŽ˜wn6Yr8H4x3H‹aršJfsš4R+šYR’AKŽ“ŽGš63ˆWbwJz8šW6ZHJf+ŠYIVxnAvŠˆŽGŠKŸyNGx‚IYR’AKŽ“ŽGšLwˆIVŠJRL’JxXHXŽMHZŠWAR–”a‹z6’+Ž–‹sˆNYRGŠˆfršJf+Š’xyŠYŸbZs4wYz–aˆbWHGV”I‹fsArMY‹bVŠJRLH‹xRj‹WLwKŸMaZš8GRCwn“šwKW‚HYš8‹zswˆ‰šjLrMAnVb‹62wnf‡šK‰‚NY6MwˆV2AnAˆšJbVŠJRLH‹xRj‹WZwKŸMaZš8GRCwn“šwKW‚HYš8‹zswˆ‰šjKWHZšb‹62wnf‡šK‰‚NY68IGrNAnAˆšJbVŠJRLH‹xRj‹ŸLwKWLN‹z8Ash4wYbz–ˆW8’+x3H‹aršJfsxGf™IˆŸbwY‰–wnIjKW”A’abwsMJHJf+ŠYIVxs‹v’hRAnŸwLraJW3H‹aršJfsx’a™šˆŸbŽ6ŠwšVxnŸ4aZšI’‹‚wZVvaˆŸˆN’x3H‹aršJfsx’x™IˆŸ8‹fKwY6“’nzWARxwsbLHJf+ŠYIVxsfZ’LIwYf‹nzˆH‹x‚šW6‹wL–ZIKbWAK‰3H‹aršJfsHGIyŠYŸbŽ6ŠwšVxnW8af“8K‰šHJf+ŠYIVxsfZ’WRwYf‹nzˆH‹xMwXIŠZŽŠ‹bVŠJRLH‹xVjsWrwKW6Yfr8IhfswZVzHnŸvAnš8wYRLHJf+ŠYIVxsfŸ’‹RAnWš–ˆbˆY’I8AWh‚wŽYnbWA’I8IGRšHJf+ŠYIVxsfŸ’ŽRwYkWxrzaY68AWh‚wŽYnbWA’I8IGRšHJf+ŠYIVxsfŸ’GIwL–ZIKŸWaH‰”Ih67wKŸ3Š‹bVŠJRLH‹xVj‹ŸrwKŸLAKŸ”IGsZwaš3ˆzWYfŽ3H‹aršJfsHG6a‹YŸbŽ6ŠwšVxn‰vaXaMwXIŠwnfzwKW6YGa3H‹aršJfsH’a™šˆŸ8An‰–wYŸMjKW4A‹“bwhf”šˆŠvxLVŽZ“ˆY’V4š4ŽšŽkˆH4šMa’Iya4‹ZIYNW’fHa’ŽŸšJa6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹I‡IK7vjnzšŽ4xLaY‰6‹’ŽšAYNˆ’dbŽaŽ6WšYx7HXRšH8œh‰GZaf’rMšYR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vanAˆYfaah8”IXŽ‚AY7WYY‹ˆaYVŸŠ4Ž2’ŠW’dbkaY‰Iha6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanI“–fNWYf“wnV‹Y‰‡xZx8šŽI™If6ŽGr+‹RLH‹adaJa6ŠYIVŠJRLH‹aršJ67‹K‰“YsWJ‹nWnWf8™G6“xWš4NhaLwKRGaGIhYRRLN’VYaŽ6NYKz2wfRLHLhJˆsvŽXŽš–Xf”Yfa”aJa6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹“HjYxGŽ’I+‹RLH‹ad™‹aLwˆIVŠJRL’f‚A‹a6ŠYIVŠJRLHˆfswG‹WHnz6AY68AWh‚wŽŽ‹bVŠJRLH‹arA‹fRŠLIšYs6kNfaršJ67šZ“VxˆzWšsIYwf6NHYAˆ’RA4aYRf’+‹JH4‹WYXVxaGR+H+‹WA‹Žf’W–ŸKŽf™GVLwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹arˆŽ‹xYI“Ž4‹MYfIhwna6xn‰JNKš8A+xˆwKIvwKzYhxbwJfKwKW‚‹X‹W’+V™a’AvI‹a6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLH‹aHasW6ŠLr2wfV8YXVYj‹fyš’I”‡ˆRhw2bfŠZŽfŽˆx”’ˆRLdbfNY“7KbˆY’aIKsJHJf+ŠYIVŠJRzH‹ŽdIWfNHK“2‹JRLHh“”j‹fwŽhxWšYf“Vš4‹ZIŽŠWA+VKa’x3a’Ž–fsWA‹a7a’ŽzxYŽf‹4fCšY‹ŸAKI‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠJR”Yh“YjŽfN‹Lr2–XxLNŽAW–R6GšnzX‹xbI’Ž7wnfzK‰ˆanšA‹fˆwY6VHnŸWaXabw+I2AnMZŽšˆHG68f6NZšš–ˆbW’VbAXšˆwL‘W’n6LH‹zbY‰vwZx2šKzMaššZVwnb‚jKŸWaŽrbwfk‚wKIvwK‰vAXIIKsZZŽVxnW‚’nšwY‰‹ILšVjKWCH‹“I’N4wYMZNLr8aWxMwn7‚ZŽVxnŸLAKŸ8XN‚wZx2šKz6’sxMwn7‚wY6VwKW8YY6bwLrZHJf+ŠYIVŠJRzH‹ŽdjŽ6N‹XRXw’xLYYJŸIKVŽK“2‹xb‹6swnfM3ˆ‰ˆaŽx8w’‹W–naŽKMZaZfaaYR’j+š–‹ˆMWwZR2aŽffaXŽ2j‹–WNKhJa‹M”+Ž‚xZš+‹RLH‹aršJb6ŠhRhxˆ“ŸNXahjhfRŽXxš–fšZšsI8IKV6xr8HKŸ‚AXN‚wYfMIKzkaZV8Ihf–wŽ–Kbˆah“bšˆsœHJf+ŠYIVŠJRzHˆhœHJf+ŠYIVHs7zYYWœARfŸŠKWhŽ4ŽCšsI8IKV6ŠL6h–KzZYfaLˆŽsxGaVŠW7W’ŽaZšJ67šZf–ŠJR”šŽxVAJf+‹KbhYs6kšsI8IKVC–faxsRMŠˆfršJf+ŠXI+‹RLH‹aršJf+ŠYI‡HRV‚NŽ“aIRrbxKbšw+f˜N‹IYAˆV+šˆf“Ž4ŽZšR“xšˆ–4šrXxWŽLHh“Ljsf+‹XŽa‹JR”š‹xVšJ67ZfVŠWV”šR“‡nxwš2‹fM’ZI‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹7MNˆŸYws‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰L‹‹AWnVGŽYAWYhaHaŽh”jXŽvIŽ7WYGR‚aYV‹+Ž2wŽš+‹RLH‹aršJb6ŠhRxWš˜YGfsZ‹JaˆW4’Rx8IYVŠwKW‚ŽnzJaKV‚ILVKIVHnzwJzw’I‹wKW‚ŽnbWH4aMw+I‹wnb‡HnzCaWrbI’Ž7wnfzKz4YH‰8IŽ6ŽHJf+ŠYIVŠJRzH‹ŽdIWfNHK“2‹JRLHhIH–YabxXr“Ž4fWH‹I8IYxŽKŸYsfLaGVW‹XŽšAYuˆ’db7a’š6’+Ž‚j‹7WaZŽJaGrf–Xšš’‘ZaZfaaŽhvŽXŽ––hœW’nhˆaGs”AX‹ˆšŽ–Jasa+aY‰zH4š–Ž4–WNYŽ–a’x3a’ŽHJJWaZŽ‹aG‘všX‹JH4‹ˆH4N”a’AvI’Ž–‹sWA‹–4a’Žzx’AZj‹JWwZfda’IWI+ŽMš’7ˆYK‹Maf6G34Ž–‹sWas8WaŽh”IXš–Ž4–WYYfZaf6G34Ž‚j‹kWARIVaG‘ˆNJa6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹I‡IK7vjnzšŽ4xLaY‰6‹’ŽšAYNˆ’dbŽaŽ6WšYx7HXRšH8œh‰GZaf’rMšYR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vanAˆYfaah8”IXŽ‚AY7WYY‹ˆaYVŸŠ4Ž2’ŠW’dbkaY‰Iha6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanIX–ˆxMNJIYŽY7zHLr–KcMHJaHˆxNHK“hxˆzˆNKkMj‹WsŠGr+‹RLH‹adaJa6ŠYIVŠJRLH‹aršJ67’K6XwŽš8NKz™AnŽbŽYIŠ‹JR”šsIkAnaŸ–dbX–hŸŸYfIYIŽ‹vw+š‹ˆIM’ZI‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹R”šsIkAnaŸ–dbX–ˆxMNJIŽwJW‹ŠGaVxˆzWšs“nV+šˆbX–hŸŸYfIYIŽ‹vw+šŽLaœYR–œj‹b’IˆI“Ž4‹MšnWnAJb+‹L6š–J68YfAWŽnRNAnzGjhVhHWaZšˆRGa’rhw‹š4HJaHjfh4HKzŽ4Ž‹NŽ“MwRI˜xKx–jhfM’sarW67ŽLfšYRVMNX7JAs‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰L‹‹AWnVGŽYAWYhaHaYVfw’ŽvIŽ7WYGR‚aYV‹+Ž2wŽš+‹RLH‹aršJb6ŠhRxWš˜YGfsZ‹JaˆW4’Rx8IYVŠwKW‚ŽnzCaWr‚ILVKIVHnzwJzw’I‹wKW‚ŽnbWH4aMw+I‹wnb‡HnzJaKVbI’Ž7wnfzKz4YH‰8IŽ6ŽHJf+ŠYIVŠJRzH‹ŽdIWfNHK“2‹JRLHhIH–YabxXr“Ž4fWH‹I8IYxŽKŸYsfLaGVW‹XŽšAYuˆ’db7a’š6’+Ž‚j‹7WaZŽJaGrf–Xšš’‘ZaZfaaŽhvŽXŽ––hœW’nhˆaGs”AX‹ˆšŽ–Jasa+aY‰zH4š–Ž4–WNYŽ–a’x3a’ŽHJJWaZŽ‹aG‘všX‹JH4‹ˆH4N”a’AvI’Ž–‹sWA‹–4a’Žzx’AZj‹JWwZfda’IWI+ŽMš’7ˆYK‹Maf6G34Ž–‹sWas8WaŽh”IXš–Ž4–WYYfZaf6G34Ž‚j‹kWARIVaG‘ˆNJa6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹I‡IK7vjnzšŽ4xLaY‰6‹’ŽšAYNˆ’dbŽaŽ6WšYx7HXRšH8œh‰GZaf’rMšYR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vanAˆYfaah8”IXŽ‚AY7WYY‹ˆaYVŸŠ4Ž2’ŠW’dbkaY‰Iha6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanIX–ˆxMNJIYŽY7MjnzwfR‚HhIH–YabxXr“Ž4fW‹RxVIJW+JbVŠJRLH‹“4HJf+ŠYIVŠJRLH‹arˆ–v’LfŽWšWŽ’V8af6’Š’fVŠW7MN‹I8jhz‹aG6š–J68YfAWŽnRNAnz3Šˆ8ZŠˆfršJf+ŠYIVŠJRLNˆWY–nxNHLŽVŠW7MN‹I8jhz‹aG6h–KzZYfakAnV‹XVšŽZI‚Hh“™KabŽKz2wsŸMšYWYNhWn–r–ŽsŽZ’sadAnV‹XVšŽZI‚Hh“™KabŽKz2wsŸMšYWYNhWY–šaYb4’ŽxrAJfwŽhHR6kNhaLˆ–v’LfŽWšWŽ’V8af6YAZ“N‹4“ŸHWaZšJ6‹XRXw‹NMNŽAŸI‹b‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹ŽdIŽfG–YzV’WIxˆŽ’anh”N’I”šŽI3A‹‰Gjnk”Ž4Ž8‹Y‰LH‹aršJf+wˆIxxWV8N4Vaš4Ž–I‹uWAh–MaYVbjX‹WA‹‹W’nfJaf6f–+ŠJŠJ7WYXš+a’ŽW–+‹WA‹‹W’nf3ahMˆa’ŽŠW7WNLRYaffyw4ŽvIŽ7WYGR‚aYV‹+Ž2wŽš+‹RLH‹aršJb6ŠhRXxJšŸYŽAMšJf+‹KbhYs6kšsI8IKV6ŠLr2wfV8YXVYj‹fyN’I”šŽI3A‹‰63ˆc”šY‰6‡ˆRašˆŽfaZVfNŽ“JIYWNIsu”™n6yŽJŸ8šŽ–ŸKŽ’aŽWNGšz‡ˆŽZŽyŠYIWN‹b6IYhzIdbGwKh”š‹aWšŽI’h‰faˆ8”NYx‡ˆŽ+IYŽ6IGšWš’fvIŽ–JšJ‰“šZŠ”šYRk’v8œh‰“’YIfš’IvšYRNIŽbYxywŽšˆ‡W–JšJ‰fŠZŽfŽWrv‡ˆhzIdbGHGaywŽšˆ‡ˆRaYŽ“ŽKfyNYŽŠY‰LH‹aršJf+wˆIxHs68šs“YjYV6ŠKf2–Xf4YfInI‹fyN‹f”’WI3w2b63ˆzyŽˆVwfVŸšRINILšVjKzM’s“‚IsbNwYfMIKzkaZV8Ihf–wŽ–Kbˆah“bšˆsœHJf+ŠYIVŠJRzH‹Žd–nR7HLšh–JWL‹f“kf6NŠXr“Ž4fWH‹‰bŽYWfGšv‡ˆR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wZR–Iˆ‰LH‹aršˆa7ŽKf2xˆzCH‹I–YVb’Xr“Ž4fWH‹“™–ˆRNŠKzHx4h4NKfLW67ŽLfšYRVMNX7J™‹WCŠGI3‹Y‰LH‹aršˆŽZwˆIVŠJRLH‹aršJf+‹L6š–J68YfAWŽnRNAnzVx+rLHh“HwˆRN’GxŠwhŸCNˆWYwnV8’LrfwŽŽ‚HWx4HJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLHh“HwˆRN’GxŠwhœ4NŽ“dwsbwŽhHR6kNhaLˆ–v’LfŽWšWŽ’V8af6YAZIN‹4“ŸHWaZšJWCŠGI–xˆzWšs“nV+šˆbX–hŸŸYfIYIŽ‹vw+šŽLaZYR–œj‹b’IˆI“Ž4‹MšnWnAJb+‹L6š–J68YfAWŽnRNAnzGjhšhHWaZšJ6‹XRXw‹NMNŽAŸI‹b‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹ŽdIŽfG–YzV’WIxˆŽ’anh”N’I”šŽI3A‹‰Gjnk”Ž4Ž8‹Y‰LH‹aršJf+wˆIxxWV8N4Vaš4Ž–I‹uWAh–MaYVbjX‹WA‹‹W’nfJaf6f–+ŠJŠJ7WYXš+a’ŽW–+‹WA‹‹W’nf–ahMˆa’ŽŠW7ˆN‹Avaffyw4ŽvIŽ7WYGR‚aYV‹+Ž2wŽš+‹RLH‹aršJb6ŠhRXxJšŸYŽAMšJf+‹KbhYs6kšsI8IKV6ŠLr2wfV8YXVYj‹fyN’I”šŽI3A‹‰63ˆc”šY‰6‡ˆRašˆŽfaZVfNŽ“JIYWNIsu”™n6yŽJŸ8šŽ–ŸKŽ’aŽWNGšz‡ˆŽZŽyŠYIWN‹b6IYhzIdbGwKh”š‹aWšŽI’h‰faˆ8”NYx‡ˆŽ+IYŽ6IGšWš’fvIŽ–JšJ‰“šZŠ”šYRk’v8œh‰“’YIfš’IvšYRNIŽbYxywŽšˆ‡W–JšJ‰fŠZŽfŽWrv‡ˆhzIdbGHGaywŽšˆ‡ˆRaYŽ“ŽKfyNYŽŠY‰LH‹aršJf+wˆIxHs68šs“YjYV6ŠKf2–Xf4YfInI‹fyN‹f”’WI3w2b63ˆzyŽˆVwfVŸšRINILšVjKzM’s“‚IsbNwYfMIKzkaZV8Ihf–wŽ–Kbˆah“bšˆsœHJf+ŠYIVŠJRzH‹Žd–nR7HLšh–JWL‹f“kf6NŠXr“Ž4fWH‹‰bŽYWfGšv‡ˆR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wZR–Iˆ‰LH‹aršˆa7ŽKf2xˆzCH‹I–YVb’Xr“Ž4fWH‹“™–ˆRNŠKzYYsR‚HhIH–YabxXr“Ž4fW‹RxVIJW+JbVŠJRLH‹“4HJf+ŠYIVŠJRLH‹arˆ–v’LfŽWšWŽ’V8af6’Š’fVŠW7MN‹I8jhz‹aG6š–J68YfAWŽnRNAnz3Šˆ8ZŠˆfršJf+ŠYIVŠJRLNˆWY–nxNHLŽVŠW7MN‹I8jhz‹aG6h–KzZYfakAnV‹XVšŽZI‚Hh“™KabŽKz2wsŸMšYWYNhWn–šaYb4H‹I8IYx7YK“2ŠˆI”N4V™jŽ6GŽLŽŽ–KMˆYfš4jR“’–faxsRM’sI8IYx7YK“2ŠˆI”N4V™jŽ6GŽLŽŽ–KMˆYfš4IW“’™f3‹ZIL’‹aZšJ6‹XRXw‹NMNŽAŸI‹b‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰G‡ˆIyŽJš6šYRLdbGˆ“yHb”‡WInAnŽ“Žˆc”NYav’v8œh‰G‹RWNYa6šŽIXA‹‰G‹7”Hb”‡WInAnŽ“Žˆc”NYav’WI”s‰“HK6fNYa6šYRY‹R‚šJf+ŠYIVŠˆ‰LaGr“H+ŽMjG–W’nfJa‹z6’XšV’4hWAf‡a’šbaXŽzŠ4cZaZfaaYR“Š4ŽMaK–ˆHˆRdahMˆŽ+ŽšŽˆMWaKJˆaGR+™+š3‡4–W’+7‚a’Ž’wˆsvŽXŽYR68NKŸ‹wYzvwKW4aŽ“ˆIhf˜wnkJ’nW8Nhx”Ihbswn““YnbWafrwJfR–hWWŽJŸ4‡ˆRšA2bfAŽWNYIˆŠY‰LH‹aršJf+wˆIxHsVkNˆWnIsf+ŠYbhxWNJšsadjKx7HLr2wYaLaGr“H+ŽMjG–WYYRnaYsˆa‹a6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹I‡IK7vjnzšŽ4xLaY‰6‹’ŽšAYNˆ’dbŽaŽ6WšYx7HXRšH8œh‰GZaf’rMšYR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vanAˆYfaah8”IXŽ‚AY7WYY‹ˆaYVŸŠ4Ž2’ŠW’dbkaY‰Iha6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanI“Ž4ŽZšR“HŽŽ6N+r3ŠW7MYf“k–sbxwˆIVŠJRLšGI‚šJf+ŠYIVŠJRLH‹I8w‹f+šˆbhxˆ“MNZhM‡ˆRxL6xŽWV6‹4VYaŽfb™Y“XwŽR‚HWa8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠWVCNfIxšWr’ŠYŸšŽWV6H‹–zjhf+NZŽ‡HRV‚NŽ“aIRr8™YbYR6MY’VŽI‹6ŸŠL6“xWš4NhadnV’ŠKfXw’fkYhI™n–4‹YI–ŽJŽL‹ŽŽHŠWcMws‰ŽxfšŽY+RHxfIn‹YI–‹4R8NZfdIn–vNˆI‡j’x”šsIYanxsAJbVŠJRLH‹aršJf+ŠYIVŠJRLYf“kwRfŸšˆbš–XR”’sarˆ74ŽXrXHRNM’sarˆabŽXrhYs6WY+ana64I+‹RLH‹aršJf+ŠYIVŠJRLH‹I8w‹f+šˆbXwŽNMšR“‡IŽc4YK“X‹‹Ÿ‹RxrAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆxf2–ˆaLNKWY–JfRŽXxš–fšZšsI8IKV6r2YsV4NXVHwsb+H’IVŠJf4H‹aHIKxN‹LIhYRRMHWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLšs“‡–Ž6‹AJbVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYIŽZ“˜Yf“4HJf+ŠYIVŠJRLH‹aršJf+ŠYI‡HRV‚NŽ“aIRrbxKbšw+f˜N‹IYAˆV+šˆf“Ž4ŽZšR“xšˆxŽXxhŠJR”šsIYanx+HGryIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJVŸYf“H–YabanIhHskzYfx4HJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’ˆRCšJ‰“–Yh”NŽfv‡WIxAŽ“NˆfGxKbšZx8šŽI‡IffNHK8ˆHKW“aY‰WšXš–afŠWYŽI8aGVyŽha6ŠYIVŠJRLHˆfswV‚wK‰‚aR“”IY‰R6HhzYnz6NXVnjŽ6yN‹6CšYfsIKŽ6‡ˆ8”ŽJšMšŽ–JAKŽ“Žˆ“ZwˆIVŠJRLH‹a‚šWR7HKzhHRšŸNKfdY7v™GaŽJšWŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹V‚YŽ“™Šf6HhzYnz6NXVnjŽ6+šZr+‹RLH‹adaJa6ŠYIVŠJRLH‹aršˆRGYY‰V‹WVŸYf“ašWr’ŠYbhxˆ“MNZhM‡WfG‹KfN–JŸ‚YfIœAJb+HLr2ŽWŽLNhI8jKx+ŠGxš‹JfMHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIXwŽNMšR“‡I‹fYK“2HsŸ8’ZI‚šJf+ŠYIVŠJRLH‹cMHJa6ŠYIVŠJRLH‹aršW6b™Gf3ŠWVM‹RI™IKxGa’r3ŠWVŸYf“aAs‰ŸŠYb“Ž+xZ’ZfrˆR’–x3Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3HsœMNˆŸdIKaŸšˆbXwŽš˜ŽZfHAsz‹xKx–ŠJRYŽIHYsvŽXŽšw’fkNˆWxwhb‹aI3Ya3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠ4“ˆaY‰zHWfG‹Kf’–fNWYYJŸnabŽn‰ˆARr8nRNwG–WYn‰vAXIIKsZZŽ–ALrWaY6‚ALR‹wZšM‹nzkNŽ“bA4ŽŽHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aH–nRw6–Ž+ŽkYhI‡šK–vnz2xZI‚HYW8IR6’ŠL6YRRLY’7ŸIszbxLŽHs6ˆNŽIxIŽfG‹Kf“–fNWYYJŸnab‹Gš–Jš”YYb8’fV’HGryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIX–L“8Yf“rwJW’4I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠLfYR7zNˆJJšˆx7HXRŽa3H‹aršJf+ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠLfYR7zNˆJJšW6bxLaX–f‹ZŠˆfršJf+ŠXf+šˆ‰LH‹aršJzŸwZR+‹RLH‹aršJb6xrLH‹x8+IMR6HhzYnz6NXVnjŽ6yŽ6bIYR–w2b6‡ˆ8”ŽJšMšYR˜wRR‚šJf+ŠYIVŠˆ‰L‹‹“‡wnx7ŽLf2‹V6NX7ŸAW6GxLŽ+‹RLH‹aršJb6ŠhRhxˆ“ŸNXahjhfRŽXxš–fšZšsI8IKV6xr8HKŸ‚AXN‚wYfMIKzkaZV8Ihf–wŽ–Kbˆah“bšˆsœHJf+ŠYIVŠJRzHˆhœHJf+ŠYIVHs7zYYWœARfŸŠKWhŽ4ŽCšsI8IKV6ŠL“hŽˆMM‹ŽIHŽ–vŽXŽšw’fkNˆWxwJbxwˆIVŠJRLšGI‚šJf+ŠYIVŠJRLH‹I8w‹b+xYbXwŽš˜H‹ŠMšJ67‹K‰“YsWJ‹nWnWf8™G6“xWš4NhaLYRG–YzVxZ“MN4axšJzGxYf3‹ˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf7HKzhHRšŸNKfdwŽfGj6Ža3H‹aršJf+ŠYIVŠJ7ŸŠˆI‚šJf+ŠYIVŠJRLH‹aHIKxnzXwhWL‹RadNf“‹AJbVŠJRLH‹aršJf+ŠKW2–Jf‚HhI”™Žhv™’R2wfR‚Hh“‡wnaŸ4IVŠWVM‹n6raJf+‹Lr–‹4rMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚N4aHjYa™G63ŠWVŸYf“™Nh6ZxaŽXr4H‹ahR6HLVYnz6NXVnjŽ6+NZrVx+‘Ÿ‹RadwŽfGj6‹JRbHKfdjKx7HLI2–JW‚Hh“‡wn–zAˆb“‹4rœYRaZšJkv’Lš2‹4xHWar™Žr‹–nIaŠY‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡ŽfLN4aHjYa™G63ŠWVŸYf“™Nh6ZxaŽXr4H‹aXIhz6NZrVx+xL’‹arw‹66ŠL6hŽJ6˜šs“VwJ67HKzX–Ga”NŽ–MjR“’IˆI–ŽsŽMH‹ŠM™‹f+N4š‡jYMZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJR”NXaHwW6NHL6G–’rL‹RadjKxGHL6hHsf‚Hh“‡wn–zAˆb“‹4rœYRaZšJW+IZxa‹ˆ8ZŠˆfršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYI“ŽWfLHJI™IKxGa’r3ŠWVˆšsIkwna’GrŠhRMšGI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYbhx4RZH‹ŠMšWhv™’R2wfR‚HhAŸ–nRŽLfXjY8”’Žar3Jf+‹Lšhxˆ“8NˆŸ™NhWY–nIy‹R”NXaHwW6NHL6GjhVh’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠGš–‡ˆfWILŽf™GVW‹4xWIYJZw‹‰6IGryHb”‡WInAnŽ“jKzxwˆIVŠJRLH‹aršJf+ŠYIVŠJR”šsIkAnaŸ–dbšŽWV6Y+a™wW6Gja3ŠˆaLNŽAzwsf7’KzhŠJR’nfH–nVNŠGryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹adjKVŽKzXŠˆIœHWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIXwŽNMšR“‡I‹f7‹LfhŽW‹ZŠˆfršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹VbYŽIœjf6‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰fŠZŽfŽJ“W‡ˆ‹ZwYŽGIYWWŽZ“C‡WAWwnŽ’anfWšYRk’WIhJ‰“šˆc”š‹aW‹Y‰LH‹aršJf+wˆIxHsVkNˆWnIsf+ŠYbfŠJVMNKŸHwRkvŽLfV’ˆŽ+IYŽfNY“7KzYhxbwJfXHJf+ŠYIVŠJRzH‹ŽdIWfNHK“2‹JRLHh“”šˆRGa’rŽˆx8NˆfswKIvwKŸbwW7JaŽkv‹’ŽzŠJ“+‹RLH‹aršJb6ŠhRXxJšŸYŽAMšJf+‹LŽhŽ4R6Yf“VšˆRGa’rŽˆx8NˆfswZNWaˆŸWaXašZVwncZIKŸbwWxbAhb7wYz2xšˆHG6MI’ŽCwZVzŽnbW’n‰œa4IŸ’’ŽšŽJ7ˆH4NJa’Žzx’ŽMj‹sWNhaŠaŽf+™+Ž–wYNWAnfˆ’ŽR‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠJR”Yh“YjŽfN‹Lr2–XxLNŽAW–R6GšnzX‹x‚IX‹ZwL‹ˆ–ˆzMHLVbAhb7wKIvwKzkaZšwY‰‹AnMZŽrbARxbw+I2Anz23ZšˆHG68f6NZšš–ˆbW’VbAXšˆwL‘WH‹bVŠJRLH‹arA‹fRŠLfYR7zNˆJJšWfb™Gš2xWškNKfswYf‡xnz6Ad‰‚IXŽ‹wnJWa’rXwfš8a4IŸ’’Ž“‹Zcˆ’Ra8aY‰zNXŽšš’NWNLf+aYV6a+Ž–‡ˆcWwJIˆŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹VCNhI8KRŸšˆbfŠZILHh“”AJf+‹LŽhŽ4R6Yf“V™‹W’IˆI‡xW7zNˆWn–nRG™GŽŠŽsRMŠˆfršJf+ŠXI+‹RLH‹aršJf+ŠYI‡x4‹zNfI‡wna6Š’fVŠWVWšRAzŽ6NH’“aŽ+“œ’ˆfHIYxG–YfYshZŠˆfršJf+ŠYIVŠJRLHhIH–YabxXr“Ž4fWH‹ŠMšJ6‹XRXw‹NMNŽAŸIŽrsxH‰aŽn‰”Yh“YjŽfN‹Lr2–XŠZŠˆfršJf+ŠYIVŠJRLHhAW–YV’Š’fVxssZŠˆfršJf+ŠYIVŠJRLYhAœšˆŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJR”šsIkAnaŸ–dbšŽWV6Y+a™wW6Gja3ŠJ6MNKŸd–Yx+ŠXršYsRLHh“LšJ67ˆf3Ža3H‹aršJf+ŠYIVŠJRLH‹aršJ6a’R2‹Zav’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠLr‹R‚HhAW–YVGHKzXLAŸHhAW–YV’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠKfXwŽškNG64HJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJ74N‹I8AW6’šˆb2wfšJYYWYjŽr6‹LŽhŽ4rM’ZI‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹7MNˆŸYws‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰Lahhˆ–4Žš‡WAWNhIŠaYVbŽXŽš‹Aˆ’+š‚a’ŠˆHsa6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹InjYabxXŽVxLŠ4NŽIH–nR+IˆI“xWšMYXVk–R“’xn‰ˆaŽx8w’‹Zwaš3ˆzWYf“wY‰‹wVv–ˆz”wZ6MA’ŽCILšVjKzCYf“”Ifh4ZŽ–AKzLad‰IsbrHJf+ŠYIVŠJRzH‹Žd–nR7HLšh–JWL‹f“kf6NŠXr“Ž4fWH‹‰bŽYWfGšv‡ˆR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wZR–Iˆ‰LH‹aršˆa7ŽKf2xˆzCH‹I–YVb’Xr“Ž4fWH‹“™KabŽKz2wsŸMšYWŽwJbxwˆIVŠJRLšGI‚šJf+ŠYIVŠJRLH‹aHjŽ6N’YIŠ‹JR”šsIkAnaŸ–dbšŽWV6Y+a™wW6Gja3ŠJk4NfadjKRNAnzVY8ZŠˆfršJf+ŠYIVŠJRLHhInjYa6Š’fVxLxh’ZI‚šJf+ŠYIVŠJRLH‹I8w‹f+n62–WšWšsaLˆabŽL63Ž+xZHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIw’fŸYfInKR+ŠY‰‡Hs68NZfdnaŸŠYbhw‹š4šRIŽAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆRGYY‰XHs68YXsŸIRfN‹K6“ŠˆI’fkNW6+AZrfŠˆ“XYha4As6+™nŸ–ŠJR”šnWnAˆxGŽGaVŠWVJYŽ“HKRŽL63‹ˆMZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršˆRGYY‰š–XhzNKŸxwJ6–Y“hxJŸ‚Yf“aARrC–63Ya3H‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xJšŸNˆfr™‹fnAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠWVJYŽ“HKRŽL6Gjhšh’sR‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJ6–Y“hxJŸ‚Yf“™NhW8–a+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfn–+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJfHLfŽJšv’ZI‚šJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7ŽLŽX–fNMHJaHIRfN‹K6“xWš˜HWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIK‹Y‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJVMYKfrwW6G–GIhHnb‚HhInjYa6ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹ad–nR7HLšhj‹VWYf“XšWVNn6Ys7MNŽAŸI‹b+šK‰CAKš8XŽ2waš3ˆzWYf“8AJzvw7ZKzM’s“‚IsbNILš‡wˆŸ–wYzJNJIœIf6ŽY‰‡jLa’sarˆabŽL63‹ˆ8ZŠˆfršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹R”YŽ“‡j‹‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰Lahhˆ–4Žš‡WAWN’š‡aŽhvŽ+‹Jw‹hWAf4aŽh”–Ja6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹“™–nabwŽIˆ‰LH‹aršJf+wˆIxHRV‚NˆJŸ–ˆaŸŠhšfxJŸ8NJ“HAn7vanAˆYfaah8”IXŽ‚AY7WYY‹ˆaYVŸŠ4Ž2’ŠW’dbkaY‰Iha6ŠYIVŠJRLHˆf‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanIšŽ4Ž”NˆJŸAR6nYKzXwhŸMNX7JwJbxwˆIVŠJRLšGI‚šJf+ŠYIVŠJRLH‹aHjŽ6N’YIŠ‹JR”šsIkAnaŸ–dbšŽWV6Y+a™wW6Gja3ŠˆxYf“HIˆab™GIVHs6ˆ’nW‡–YRGjnb–wf68NˆŸ™An7vaŽXwŽš4YfInjf6’NZryIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbXwŽš˜ŽZ6dšs‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰Lahhˆ–4Žš‡WI‹ŽJšCaŽ6ŸI4Ž–hR+‹RLH‹aršJb6ŠhRXwŽNMšR“‡I‹f7’XrXwYzWYLI‚šJf+ŠYIVŠˆ‰L‹‹“Hwˆab™’aXj‹Vnš‹I™wna7‹Lr2–XxLaf6’YXš3‡ZNWwZR2aŽffaXŽ2j‹–WNKhJa‹M”+Ž‚xZš+‹RLH‹aršJb6wZš+‹RLH‹adIˆxGHLa“ŽJWLYKŸYIŽh4‹Lr2–XxLNfInhb+JbVŠJRLH‹“4HJf+ŠYIVŠJRLH‹arˆabŽL6Vx+rLHh“HwˆRN’GxŠw‹š”YYMŸjKRŽLa2ŠˆIY’Vn–sf+™G6fYsWˆY’Vœn–4’Gš2wŽNM’+ahAWfGaI––hš”Yh“‡wn–4’YŸ3Ža3H‹aršJf+ŠYIVŠJVŸYf“H–YabanI‡Hs68N4R4IW“‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰“HGRWŽZ“CIˆ‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹La2–hŸkNhNŸˆRNHYIX–WVŸNŽAWwhfy‹v‰šŽIJw‹‰“HGRWŽZ“C‡WI2ILŽfHKc”ŽJf4’ˆRXAh‰GNZayšŽŽJšYfRˆŽbHn6yšYRk’ˆŽ2ALŽG™YzxwˆIVŠJRLH‹a‚šWR7HKzhHRšŸNKfdjKx7HLr2wYaLahM”Ž’ŽIY‹W’dbhaYsvY’ŽjYuWAf4aŽ6ŸI4‹WA‹‹WYL‹”a’xbH+ŽMN‹cW’‹vahzfIXŽ2ahŽ+‹RLH‹aršJb6ŠhRhxˆ“ŸNXahjhfRŽXxš–fšZšsI8IKV6xr8HKŸ‚AXN‚wYfMIKzkaZV8Ihf–wŽ–Kbˆah“bšˆsœHJf+ŠYIVŠJRzHˆhœHJf+ŠYIVHs7zYYWœARfŸŠKWhŽ4ŽCšsI8IKV6ŠL6š–J68YfAWxRfNŠXrhYs68HJaHAˆ7v’K“2xXf”NŽ“VAsa6ŠYIVŠJ7ZŠˆfršJf+ŠYIVŠJRLHh“‡wnVG™’rŽXfbNŽIœwRr’NZšX–fVCYŽ“‡JzŸNZŽxJNMYfaLwfIG–YbN–n“MN4sœwhb’aGfšŽ4Ž”HJxrAJ‰‹4Ž3‹4x’nŸdIŽ6ŸN4I+‹RLH‹aršJf+ŠYI‡HRV‚NŽ“aIRrbxKbšw+f˜N‹IYAˆV+šˆŸX–hŸŸYfIYIŽhvxLIVŠ4RZH‹aXI‹67HKz2Ž4hMYfNŸwYRGjnz3Ža3H‹aršJf+ŠYIVŠJR”NˆWYjhfs–nI‡HRV‚NŽ“aIRrŠXR2xZ“NŽIœwsb+‹LfŽ4RˆšsIYšf6bwa‹ZILHhIœIfhvxLaN–fVMNˆf”aJa6ŠYIVŠJRLH‹aršJ67‹K‰“YsWJ‹nŸ‡wnVG™’VŽŽ6MNhIŽwJ67HKz2Ž4hMYfNŸwYRGjnz3Ža3H‹aršJf+ŠYIVŠJVŸYf“H–YabanI‡Hs68NZ64HJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’WAŸwnŽGjn6ZwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHAˆ7v’K“2xXf”NŽ“Všˆ–4‹Lf“Ž4ŽH‹‰’3ˆŸfŽZxb’WAŸwnŽGjnk”YŸkIYW6ˆŽGHGayNYav’WIXAJ‰fŽGxf‹Ž”šYW7h‰fNY“yšYVvIŽAŸwRR‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠW7MNŽAzwsfwŽhxWšYf“Vš4Ž2–fNWYYhvaGrf–XšŽvuZaZfaaŽhvŽXŽ––hœWaKŽ’a4IŸ’’š2IŽhˆH4š”a‹z6ahW‹šZAWaKŽ’a+x+ŠJa6ŠYIVŠJRLHˆfdŠYaxLfšŽ4rLHh“™AnŽbŽYIX–WVŸNŽAWwhfyYŸkIYW6ˆŽfNY“yŽZIWIŽIˆI‹u”™n6yNGš8’WIbšˆfrjsWCšZIfxnaŸ’‹u”™n6yw’Ib’ˆfWAs‰“YG7”ŽZ“C‡WAWwnŽGHY“WHbz’ˆŽydbyŠYILwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHjŽfN‹KzVHsœMNˆW8IŽ6Ÿxn‰ManVMwZr7wKW‚ŽnWvaŽxYVwK6‚šLšˆHG6MI’ŽCwZVzŽnWbH4“L’h‹zYa7‹n6LH‹f3H‹aršJf+ŠGRVx‹VŸYf“H–YabanIX–WVŸNŽAWwhfyH‰8’WI2wLŽ’3ˆŸfŽZxb’WIXA‹‰“NZVyŽˆa4’ˆŽ“s‰6wK“WwYf”šYRGdb’aZxW’av‡WA”sR‚šJf+ŠYIVŠˆ‰L‹‹“Hwˆab™’aXj‹Vnš‹I™wna7‹Lr2–XxLaf6’YXš3‡ZNWwZR2aŽffaXŽ2j‹–WNKhJa‹M”+Ž‚xZš+‹RLH‹aršJb6wZš+‹RLH‹adIˆxGHLa“ŽJWLYKŸYIŽh4‹Lr2–XxLN4V™jŽ6GŽLŽŽwŽšCNXa‡Jb+‹La2–hŸkNhNŸˆRNHGaVŠW7MNŽAzwRr‹x’xaŠZILHh“™AnŽbŽ’f2wfš4NhaZšJ67HK“hxW‹ŸNKŸYAˆV+JbVŠJRLH‹“4HJf+ŠYIVŠJRLH‹arˆabŽLx2–WV8Y+VAnVŽ’f‡j’f˜YhI™nab‹Gš‡j’Ž”YŽ“Hwsb+šR62ŽWVK‹JI8jf“ŸNZr–wh6kNKWxwJW+I4ŽyŽnbM’nfXIYVNŠ’r‡jLa3H‹aršJf+ŠYIVŠJR”Y’7zJfs–nI‡–JŸCNˆWYwnVHKzš–XfŸYharwhz6‹LfŽ4RˆšsIYšf6bwaŽa3H‹aršJf+ŠYIVŠJR”šsI8IR6’Š’fVxˆzWšs“nV+šˆbhxˆzJYfa”aJa6ŠYIVŠJRLH‹aršˆRGYYI3ŠJš8Nf“d–nŽ’šˆbhxˆzJYfa”šJ66YYI‡HRVMNfIŽ‡JW+w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aHKVG‹YI–XrLHLfrIszN‹Lr2ŽWŽJNhI8InRN‹YI‡j’x”šsI8IR6‹AJbVŠJRLH‹aršJf+ŠXf+‹RLH‹aršJf+ŠYI“ŽWfLHJanwnVNŠXrf‹ˆI”N4V8af6’ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹arWhv–YbVŠ4ŠŸH‹aXšJz’–G6“Yr8H‹aXI‹67’LrfwŽ‹ZŠˆfršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹I8w‹f+šˆ“Ž4RZšs“”wJ67HK“hxWŽMHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xJŸJYharIŽr’ŠYŸVŠ4rJYYW8–szNHK“hxWŽLHLhJˆabxXrŽa3H‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLHh“‡wnaŸŠ’fVŠW7MN‹I8jhz‹aY“xJ6KN4VkwnVIˆ‰‡xJŸJYha”aJa6ŠYIVŠJRLH‹aršˆRGYYI3ŠWVŸYf“ašJ66YYI‡Hs68N4R4IW“‹–+f‡j’f˜šŽ“™–R6G–ššwYzW’+a™wJ‰6ŠL6š–J68YfAWjŽ6G’LšXwŽsˆH‹AWIKx+ŠKW2–WšWYhaXAnŽZwˆIVŠJRLH‹aršJf+ŠYIVŠJ7MN‹“‡IKxŸŠLŽYnaL‹f“kf6NŠXr“Ž4fWHJI8InajšxWŽ‚HY64šJf6IˆI‡Hs68NZf”As‰ZwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYbXwŽš˜H‹ŠMšJ67‹K‰“YsWJ‹nŸd–YVjsI“ŽZ“8HJaHjŽ6G–GšhxWšKYKW8AW6’IˆI‡xZ“ˆY’VnAWcv‹LrXY8ZŠˆfršJf+ŠYIVŠJRLHh“HwˆRN’GxŠwh68NfAŸ–f6ŽYLr2xWŽ‚Hh“‡wnVG™’rŽXfbNŽIœwsb‹AJbVŠJRLH‹aršJf+ŠLfYR7zNˆJJšJ67HKzXjLa3H‹aršJf7–sb+‹RLH‹arIhb6wJbVŠJRLH‹arA‹fyšGx6šŽA”nŽ“šKby‹4xzIŽI7IKŽ“ŽLayH‰8’WI2wLŽ’an6f‹4xWIYŽMIGŽfNY“yš’I”‡ˆRfwhu”™n6yŽˆWLIYRfwh‰63ˆzyŽˆVIŽ–JIGŽfAŽWšYRk’ˆ‹Zvb“šYŸy‹4“bIYŽJYŽG‡ˆ“fŽJf4’ˆŽ4Ah‰’anff‹4xzIŽIŠšZŽ“ŽLayGŽˆIY‹ŸALŽfNY“y’VkšYRNIŽ“YxWwŽ“J’W–JIGŽ“In‰LwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHIR6N‹K‰2–fRLN4aHjYRGaYŸV’ˆRXAh‰fj‹”šYRk’ˆRGIYŽ“jKzfŽWRC‹Y‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹LIšYs6kNf“ašWfNHLfšYnbLaGr“a’Žv’WNWNH8WaYVzŽ’‹WA‹‹WYHb+aGrGI4AZj‹JWwZf‡aKRaXŽ2AŽ‘WN’VšaGr’‡4ŽjYuWARIZa’IWx’ššš‹W+‹RLH‹aršJb6ŠhRXxJšŸYŽAMšJ67‹Lr2ŽWšˆšR“xšˆRGa’rŽˆx8NˆfswLVšwKzˆwW“wY‰‹wZx‚YnW8aˆVbw+I2AnMZŽšˆHG68f6NZšš–ˆWvaLšA+Ž–ILšVjLrWaY6‚ALR‹ZŽ–wZ6axsRZaGs”AX‹ˆšŽ–Jasa+ŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡xˆzWšsIYjYxbxLaYxˆzJYfadAnV‹Kz–fšŸH‹‰6™GVWGš‚IYRKAnŽ6IK‰WšYRk’ˆWNIs‰bNYzyNŽ“JIYWNIsu”™n6yŽJŸ8šŽ–ŸKŽG‡ZVWšYŸ”IH8œh‰baˆWyGŽM’W–JIY6ŽIJWsŠGIa’WA”ALŽfwKbW‡4“C’WI™AZ6ŽIJWyNGšz‡ˆŽZŽyŠYILwˆIVŠJRLH‹a‚šWR7HKzhHRšŸNKfdnaHK“f‹JR”YŽ“H–nabwnfhYRV8a‹z6aXŽš–fNW’nfzahfzŠ4‹JH4‹WAn‹vahM”Ž’ŽIY‹WYGfnaŽ6+AXšVA‹–Was8WaYs”a’š–xˆcZaZfVaŽh”IXšV’4hWNŽa“a‹z6A’AZj‹kWaGRRa‹z6Š’‹ZI’‘WARIZa’IWx’AZj‹W‡xJNMšs“‡ARfŽXršŽ–JIGŽGˆWW‹4xzIYf3šZŽfŠZŽfŽZ“IYRrAdb“YxWH‰8’WI2wLŽ’aK6yš’IJ’ˆRYAJ‰“’LVW‡4“C’ˆRyZŽGHYM”wY“WIŽAˆ28”™nfyNŽš4’ˆ‹Zs‰fNY“ywŽŽvIŽIxK‹”™nff‹4xCŽVkšs“HjYRGHXRhxW“”Ihbswn““YnŸbwWx”I‹fswY‰–šLšˆHG68Asz7wZx3Yn‰ˆaŽx8w’‹ZwLR2AKW8NhxI’xxHJf+ŠYIVŠJRzH‹Žd–nR7HLšh–JWL‹f“kf6NŠXr“Ž4fWH‹‰bŽYWfGšv‡ˆR3wHbGHŽWŽ4“LIŽAJI‹‰’3ˆ‰fN‹VvIˆ‰LH‹aršJf+wZR–Iˆ‰LH‹aršˆa7ŽKf2xˆzCH‹I–YVb’Xr“Ž4fWH‹“hnRN‹Xr“Ž4ŽHJaHIR6N‹K‰2–fR4H‹InjYabxXŽVŠWVZYŽ“‡nVN’’fG–’r4H‹aH–nRG–Yz2–WNM‹RxaIJWsŠGaVŠWVMNKŸHwnaYK“2xfVMNfIŽ™‹Ÿ‹ŠGIaxsRZHWR‚šJf+ŠYIfIˆ‰LH‹aršJf+ŠYIVxˆzbH‹aLnVGŽXr“x4f”Y+VYanRN’XrXjYI”šsIkAnaŸIˆI‡x4R8šsIkIf6+ZrfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹ad–nR7HLšhj‹VWYf“XšWVNn6Ys7MNŽAŸI‹b+šKW8AKŸbA4ŽNwnbV–ˆbWH’a8Af6CwnŸ3LšˆHK‰’nfHIR6N‹K‰2–fRM’ZI‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹arˆxwxŽ4hzšsar™‹fwŽhHR6kNhaLˆxwxŽ4hzšsa”aJa6ŠYIVŠJRLH‹aršJ67‹Lr2ŽWšˆšR“x™sW+ŠYW‡‹R”šsI8IR6G™’Rhx+rZ’ZI‚šJf+ŠYIVŠJRLH‹aHAnV‹KzXwf6kNhšHAnVGŽYIŠ‹JVMNKŸH–ffGIˆ‰‡xˆzWšsIYjYxbxLaYxˆzJYfa”aJa6ŠYIVŠJRLH‹aršJ6wŽhxWšŸšnWnAWšwxŽIœ’‹arw‹66ŠYb“Ž4‹MYf“‡–ffGjRŽ“Ž4R8‹RxRIJ‰ZwˆIVŠJRLH‹aršJf+‹L6hxJšŸšsšHAnVGŽYIŠ‹JVMNKŸH–ffGIˆ‰2ŽˆzCNˆJŸ–nRG–Yz3HRVŸšRIŽAsbCxGIaxsRM’ZI‚šJf+ŠYIVŠJRLH‹IHIhf7AJbVŠJRLH‹aršJf+ŠYIVŠJRLHh“‡wnx7ŽLf2‹sŸH‹I™nVjnšhYsŸ8NˆMŸwYxGaY6N–hšŸNˆWna‹bnAˆbhxˆ“MNZfZšJ6–Yzhxˆ“ˆYhNMAJf+‹LIšYs6kNf“aAs‰ZwˆIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwW6G–GIhHnb‚Hh“‡wnx7ŽLf2YbMH‹“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹–œIX‹ˆ–hkWNXšna‹z6Š’ŽzaXsWAn‹vaf6f–+ŽšN‹œWA‹‰raG‘”wsa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad–Y–vjnzYsR‚HhI8IYxŽLfhw‹š4ŽhI8IR6’4I+‹RLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYI‡xJœzNˆŸ‡wnV‹fŽ“Ž4R8H‹ŠMšˆRGa’rhw‹š4HJAzARh4HLšhxˆzJYfak–naŽKz3‹JRzH‹xRIJWsŠGryIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJ74N‹I8AW6’nz2Ys7MšŽaLˆabŽXrhYs6WHWarw‹66ŠY‰‡xJœzNˆŸ‡wnV‹fŽ“Ž4R8’RaHjKxxLfhxfVMNfIŽ™s67‹Lr2ŽWšˆšR“xAsb‹AJb+’“ˆH‹aršJf+ŠYIVŠJVMYKfLWh4ŽLfXwŽšWšsšHAnVGŽGx‡HsœMYŽ“‡–RšwxŽ+ŠŸHh“HAnVGŽLšhYRRMšGI‚IhzŸŠYIVŠJRLH‹aršJf+ŠYIVHR6kNˆMŸˆxG–GI3ŠˆŠ4YŽI8–nxwŽVxWkzNKW™–nRG™GŽVHRVMNfIYIKxN‹’šVŠˆaWHhAzwnxšŠ4x’sarˆaxLfšŽ4R˜‹RaXIYR’Lš2w+f8NKW™If6ŽY‰‡HsVkNˆWnInaŸjsbŽ–+fyY+RY’WVY’hxxŽhVn‹hNŸŽfx”wsx‹–RVnHW–Jwhz+ŠYb“Ž4‹MYf“‡–ffGjRŽ“Ž4R8‹RaXI‹6wŽhxWšŸšnWnAWšwx‹ˆ8ZŠˆhœIhf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aHjŽ6N‹XRXw’ŠZŠˆfršJf+ŠXf+šˆ‰LH‹aršˆa7HLrhw‹NMYfadjKxxXr“ŽJWLYKŸYIŽh4‹Lr2–XxLNJ“‡AnV‹KšXYI”NXV‡A‹bNAJbVŠJRLH‹aršJf+ŠKzš–K“ˆH‹aV™na7HKzŠ‹hZŠˆfršJf+ŠYIVŠJRLNJ“‡AnV‹KšXYI”NXV‡A‹b‹AJbVŠJRLH‹aršJf+ŠKzš–K“ˆH‹aX™sM4ŠLfŽ+x’ZI‚šJf+ŠYIK‹Y‰3H‹aršJf7ŠLf“YR6kšsIŽšW6ŽLŽš–WVMNX7JšWfG‹KfN–JŸ‚YfIœAJb+‹K62ŽWRMŠˆfršJf+ŠXI+‹RLH‹aršJf+ŠYI‡xJŸJYhar™‹f+šn“xJfL’R“ašJ6Ÿanbhxˆ“MNZhM‡Wcv‹KzhwYzCYf–Jwhf7’K‰ŽZ“4H‹aXI‹6’Lxxa3H‹aršJf+ŠYIVŠJV8š‹IYhb+‹K62ŽWR4H‹aHIKxN‹LIhYRR4H‹aHjŽ6N‹XRXw’ŽKšnWnj‹b‹AJbVŠJRLH‹aršJf+ŠLr‹R‚Hh“‡wnx7ŽLf2w+hvYŽ“VRr‹–I3Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆRGYYI3xWšJNJ“Ha‹b+‹LšhYRVZšR“xAsbNAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7‹K‰Xw’h4H‹AWwnxŸŠhšfxJŸ8NJ“HAn7van‰‡‡ˆfˆIdb“KIyNYšMšYRšA2bG‹GrWŽZŽ6šYfCRInWfWŽWaC’WAŸvbGHK6fH‰”’ˆfkhšdHŽŽyšYRk’ˆŽŽA‹‰“HGŠ”NŽfv‡WIxAŽGxLŠ”NYa6šYR‡Adb6n6ŽXxŽWr8ˆ74Z‹ˆŽnŸbwWxbwffŠAnWxšˆHX“’nfHKVG‹GryIˆ‰LH‹aršJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršJf+ŠYIVxWš4N4VYaJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹ad–nR7HLšhj‹VWYf“XšWVNn6Ys7MNŽAŸI‹bwxXxZ“ˆYhIŽwJfCAˆIVGILHhAŸ–Yx7ŠXRhŠˆbWHhI™IR6+4I+‹RLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aHIKxN‹LIhYRsZŠˆfršJf+ŠXf+šˆ‰LH‹aršJzŸwZR+‹RLH‹aršJb6xn‰CAKš8XŽ2wZVvaˆzMHYš8If6Šwnfš–ˆz4YH‰8IŽ6NwYfšxnWHYŸbLRKZ‹ZNKbˆah“bšˆsœHJf+ŠYIVŠJRzH‹ŽdjŽ6N‹XRXw’xLN4aHjYRGaYŸV’ˆh‚ws‰GNKŸ8sŸ‹’ˆRGdb“n‰ZwˆIVŠJRLH‹a‚šWR7‹K‰Xw’h4NZfdxKŽ’KzXHRVMNX7Jš4š‹WkˆHvbˆaY‰zNXŽšš’NWNLf+aYV6a+Ž–‡ˆcWwJIˆŠˆfršJf+ŠYI3Y‰ˆŠˆfršJf+ŠLIXwYMvYŽ“HwsfYXR2w‹œMNŽAŸI‹fn™G6hHs6NXa‡‹YabŽKŸ‹ŽJNMY’VLwJ67’XrXwYzWYLf”HJf+ŠYIVHa3H‹aršJf+ŠYIVŠJVŸYf“H–YabanIXHs68YXsŸjŽ6NŠLašŽJŸ8HJš4whMzIZš–jYa4H‹aXIf“+aš‡–’r4ŽZfhNJzŸNZaVŠˆxX’nfhšsz+‹L6hHs6MNKWXAs‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰LaGR+a’Ž‚–L‹ˆHGR+a’x3a’Ž2xˆ‹WwJaaŽh”H4ŽšŠ4cˆH’N4aŽh”Ž4š3a28WNŽa7aY7vŽ+Žšw‹œWNhIŠaYVbŽXŽ‚w‹sWAf‡ahfzŠ4‹JH4‹ZaZfVa’I3‡4‹ˆxZ‹WAdb8aY‰b‡4AZj‹6+‹RLH‹aršJb6ŠhRXxJšŸYŽAMšJf+‹K“hHRVŸŽnWnIR6’ŠL6hHs6MNKWXš4š–‡W‹WYLŽfŽJ‹z’’ŽMN‹cWA‹ICŠˆfršJf+ŠYI3‹VrNJInjŽfG–nI‡xJNMšs“‡ŽWfGj+R‹JV˜šs“‡AnVbNˆAˆ’dbŽaŽ6WšŽIR–‹JWAnR7aGRha6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹InjYabxXŽV’ˆh‚ws‰GNKŸWŽJWkšŽIxAHb6HˆIWš‹aWšŽIˆIYŽ6jn‰fšYRk’ˆRYAJ‰faˆ“rwˆIVŠJRLH‹a‚šWR7‹K‰Xw’h4NZfdxKŽ’KzXHRVMNX7Jš4š‹WkˆHvbˆaY‰zNXŽšš’NWNLf+aYV6a+Ž–‡ˆcWwJIˆŠˆfršJf+ŠYI3Y‰ˆŠˆfršJf+ŠLIXwYMvYŽ“HwsfYXR2w‹œMNŽAŸI‹fn™YŸYRVyNXVHwn–MHXŽxYR7MNˆfLWfN‹XrX4ŽkNfIŽAJf+‹K“hHRVŸŽKWnAˆxGŽGr+‹RLH‹adaJa6ŠYIVŠJRLH‹aršˆRGYYI3xW6kNh“™wsbNAJbVŠJRLH‹aršJf+ŠYIVŠJRL’h‚ZŽV–ˆW6NYš‚wWf˜wGV“Žn‰‚YG6”I’šŠwK‰VHšˆHG68XšvwYW33ˆbW’V”IY‰2wYzvwKbˆA2‰”I’šŠwK‰VHnWCa‹xAsz‚HJf+ŠYIVŠJRLH‹aršJf+ŠYIXwŽNMšR“‡I‹fnIŽYnaLšŽI8AˆxNŠK‰XxXfkYhI‡šf6Gjnz2ŽWšWšsaLwh6w+rŽ4R2’‹NMwhz+‹Xr“xˆz˜HWNMaJa6ŠYIVŠJRLH‹aršˆšxwˆIVŠJRLH‹aršJfwnW3ŠJŽ”š‹AzAJfs–nI‡HRV‚NŽ“aIRrŽLrY–Kz”YXVY–naŸšZr3Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹šJšs‰ZwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠLrY“ZNˆWYwfcv–Y“hxJŸ‚Y+VnAˆV+šˆŸ–jL“2YnkWšsb˜™nŸ–ŽVkšs“HjŽxbxLx‹4x‹RaVwhz6‹Xr“xˆz˜’RŠWšK–4‹LfHw’fŸŽ‹“‡wRkM–Y“hxJŸ‚HJaHnx7‹LfYw‹š4šRIŽAsz6NˆfG–’Š”YRa‚3Wr6™Gr‡jGILHh“kInV+IˆI‡x4RkšsI™wW6N’GaVxhV’‹fŽhšf‹MŽfŽN–+f’‹hŽY‹Jb’w+I+‹RLH‹aršJf+ŠYIVŠJRLH‹aHwnVŽLxŽ4‹MNZfr™‹fnInxyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹adwY74HKzšŽJŸ‚H‹aLˆVGxXrš–K“8NZfdnaŸŠYb“YRV8Nfa8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹arW6Gjnz2ŽWšWšs“™Nf“’Š’fVx4Ž8šfdaYRGj+RXxˆ“ZY+VnWf8™Yz2xWšJYfAW–sb+‹LrhxWšJŽZ6dšsz+ŠYbhxˆ“MNZf”aJa6ŠYIVŠJRLH‹aršJf+ŠYIVH+r3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aHwnVŽLxŽ4‹MNZ64HJf+ŠYIVŠJRLH‹ad™‹a6ŠYIVŠJRLH‹aršW6Gj6Ya3H‹aršJf+ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹šJšs‰ZwˆIVŠJRLH‹aršJf7–sbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰“šZŽfN‹ŸvIYf3šZŽfŠZŽfŽZ“IYRrAdbG‹nfWŽJRˆ’ˆfyIdbG‹nzWGŽˆIŽI”dbG™Y8”ŽJ6CšŽIœ2bGaYzfN‹6L’ˆRXYŽ6HˆIWš‹aWšH8œ‹‰fAZVy‹4x6šŽ–JAGŽG‹nIWNŽš4’WIŠA2bbŠYffN‹zzšYRšA2bG‹GrWNY‰‚šYŽ˜GŽ“šLrfN‹6ˆIH8œŽR‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVŠJR”YŽ“H–na”aY“2ŽWŽLN4aHjYRGaYŸV’ˆh‚ws‰GNKŸ8sŸ‹’ˆRGdb“n‰ZwˆIVŠJRLH‹a‚šWR7ŠK“Xw‹šJH‹aHnx7‹LfYw‹š4šRIŽšˆ–4‹Lf“Ž4ŽH‹‰63ˆzyŽˆVwn“™Žs‰“Žˆc”NY“‚Iˆ‰LH‹aršJf+wˆIxHsVkNˆWnIsf+‹La“ŽZx8H‹I‡IK7vjnzšŽ4xLaGr6IXŽŠˆJWAYfka’IyH4ŽM‡ˆMˆHvb6a4IŸ’’š2IŽhˆH4š”a‹z6af6bxLaX–f“ˆIhf˜wn62‹nŸ4AXI8+x2wYœˆYn‰vahf3H‹aršJf+ŠGRVx‹VZYŽ“‡nV’ŠYbfx4R4H‹“™–nabwŽj‹x8Ash4wKz3Kz4YH‰8IŽ6NwKW‚‹ff‹ŽGI3H‹aršJf+ŠGRVx‹VŸYf“H–YabanIšYs6ŸYŽ“”š4š–‡W‹WYLŽfaŽfŸxXŽŠZ7ˆHGR+a’x3a’Ž“‡4‹ˆ’sIka’Žzx’ŽMŽZAWaZŽRŠˆfršJf+ŠYI3‹VršsIkjY74š6VxŽNJY’VYIˆxwš2‹xMws6wZ7ˆ3ˆW6Aš8+IvwšV’nzW’n6”IXš7wYI“™sbVŠJRLH‹arA‹b6™sbVŠJRLH‹“djYRNYK“hxWŽLYKŸYIŽh4‹Lr2–XxLY+VhwnxRaGšxWš˜‹YŸ8’YRGInzxYR7MNˆfLWfN‹XrX4ŽkNfIŽAJf+‹K“hHRVŸŽKWnAˆxGŽGaVŠWV4NŽIJwRrGYK“2HsŸ8’sarˆŽ–GaŠŽ4‹zNhIZAsa6ŠYIVŠJ7ZŠˆfršJf+ŠYIVŠJRLNŽIššJb+‹La“ŽZx8HW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYI“ŽWfLHJaRˆŽ–Ga3‹J7ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVMYKfrwJf’‹Xx2ŽZIL‹RarˆxrXj’‘”šRI8YnRG‹KŸYRV˜HJa”Asf7AJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJVŸYf“H–YabanIG–’‘ZŠˆfršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLNŽIšwˆa7HKz–’fJYŽ“HKRn™Y“2xZI‚HLhœ™RAzadbN‹Z–‚HLhJWfN‹XrX4ŽkNfIŽI‹6˜–nfG–’Š”YRa‚whz6‹Xr“xˆz˜’RŠWšK–4‹LfHw’fŸŽ‹“‡wRkM–Y“hxJŸ‚HJaHnx7‹LfYw‹š4šRIŽAsz6šnVNXŽhHˆf‡Nf“CaYx3Xc”’+V”whz+ŠYbfx4R4’sarˆVGxXrš–K“8NZfZšWŽnHhšH–’f‹‹fšHšfŠzHhŽHŽhfMHW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aHwnVŽLxŽ4‹MNZfr™‹fnInxyIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIw’fŸYfInKR+ŠY‰‡x4RkšsI™wW6N’YIšYsWLHhI8–R6G–rfIˆ‰LH‹aršJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹aHwnVŽLxŽ4‹MN4RJšsfs–nI2wŽN4H‹“8AnV7ŽLI“HsVKYŽIHŽcvŽLaŽ4R8NKŸxwJ6w+rŽ4R2’‹NMAJf+‹Xr“xˆz˜HWx4HJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹aršJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹R”YfIœwnVGŽLŽhHsJZŠˆfršJf+ŠYIVŠJRLH‹aršJf7–sbVŠJRLH‹aršJf+ŠYIVŠJRLYfIœjf6NAJbVŠJRLH‹aršJf+ŠYIVŠJRLH‹aršJf7HKzhHRšŸNKfdNf“‹AJbVŠJRLH‹aršJf+ŠYIVŠJRLšfR‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLHh“HwˆRN’GxŠw+fYf“H’ˆ7v‹KzX–skW‹Ž“H–na6šˆbšYR7MNˆ8WnVGŽGaVŠWVkšs“HjŽšbxLahŽWŽM’ZI‚šJf+ŠYIK‹Y‰3šfR‚HWhvjn“X–JWLšŽI8AˆxNŠK‰XxXfkYhI‡šf6Gjnz2ŽWšWšsRMaJa6ŠYIVŠJVZNˆW8–ffN‹KzVŠWVKNKJŸW6Y™’x2ŽZAŸHLfXaJa6ŠYIVŠJVZNˆW8–ffN‹KzVŠWVKYhIY–KRG’Kzyj‹Rˆ’db“HKIyŽZ“IYŽ“s‰6IGšWŽˆbk‡WIˆIYŽ6jn‰f‡4“C’WI™A4a8AnV7ŽLI“HsVKYŽIH’‹WA‹‹WN’šfa‹Mˆ’saLwˆIVŠJRLNJ“YYVwn6VxWkzNKW™–nRG™GŽVxXfKY’7ŸIY–4‹LfhŽJœMHJaHIY7v‹KzN–ˆ“JNhaZšJ66‹KbYR6MY’VŽAsa6ŠYIVŠJ7ZŠˆfršJf+ŠYIVŠJRLHh“HwˆRN’GxŠw+fWNXVHwRc4x2ŠJsŸH‹aHIY7v‹KzN–ˆ“JNhx4HJf+ŠYIVŠJRLH‹arˆxrXj’‘”Y+VHwnxbwn6‹JsŸH‹aHW6NYLrš–f‹ZŠˆfršJf+ŠYIVŠJRLNŽIššJbYK“2HsŸ8HW“4HJf+ŠYIVŠJRLH‹aršJf+ŠYI‡HRV‚NŽ“aIRr8™YbYR6MY’VŽšWr’ŠLŽYnaLšŽI8AˆxNŠK‰XxXfkYhIVwJ6ŸNZryIˆ‰LH‹aršJf+ŠYIVH+r3H‹aršJf7–sb+‹RLH‹arIhb6wJbVŠJRLH‹arA‹fyH‰8’WI2wLŽ6HˆIWš‹aWšŽIyw2bGwKh”šYRkHn“JNh‰’aˆu”šYIL‹Y‰LH‹aršJf+wˆIxHs68šs“YjYV6ŠL6hHs6MNKWXHJf+ŠYIVŠJRz’I‚šJf+ŠYIXHRš6NhI8hfYXR2w‹œMNŽAŸI‹faGšxWššNfIZwJbNAJbVŠJRLH‹aršJf+ŠLfYR7zNˆJJšJ67‹K‰“YsWJ‹nMŸIY7v‹KzN–ˆ“JNhx4HJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’ˆfyIdbG‹nzW‹bLIYŽ+IYŽfNY“7HKzX–XhzNˆW™wszGwn8WNhIfaY‰+wX‹WA‹‹WY‹–œŠˆfršJf+ŠYI3‹VrNˆWY–nxNHLŽVx4RMš‹IYˆš7’XrXwYzWYLI‚šJf+ŠYIVŠˆ‰ˆŠˆfršJf+ŠLIhŽJ64NŽIašW6ŽLŽš–WVMNX7JšˆabŽL62–WšŸY’VYHf6+šZrfIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbhxˆ“MNZhM‡WcvxXrhHsf‚HXa‡wn–v™’RXw‹Ÿ8’RI8J6Ÿ4I+‹RLH‹ad™‹aLwˆIVŠJRL’f‚A‹a6ŠYIVŠJRLHˆfswˆ6všKzCaYV‚Y‰–wKIvwKŸbwW7MYf“k–+Ž2xˆ‹WwJaa’Žzx’ŽšŠ4“+‹RLH‹aršJb6ŠhRXwŽNMšR“‡I‹f–GrfxWš”šh“™–nabwŽIˆ‰LH‹aršJf+wZš+‹RLH‹adIˆxGHLa“ŽJWLYKŸYIŽh4‹Lr2–XxLšsIYanx+šZrfIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbhxˆ“MNZhM‡WcvxXrhHsf‚HXaHwnŽ7‹YŸ3Ža3H‹aršJf7–sb+‹RLH‹arIhb6wJbVŠJRLH‹arA‹fy‹‰J‡WIŠwŽ6HˆIWš‹aWšYŽ“sI8IŽ6ŽXŠWNhIfaY‰+wX‹WA‹‹WY‹–œŠˆfršJf+ŠYI3‹VrNˆWY–nxNHLŽVx4RMš‹IYˆš7’XrXwYzWYLI‚šJf+ŠYIVŠˆ‰ˆŠˆfršJf+ŠLIhŽJ64NŽIašW6ŽLŽš–WVMNX7JšˆRGaYbYnI‚HW“4HJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLHh“HwˆRN’GxŠw+fkšs“Hj‹b+šr2wŽV8š‹aXAs‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰Lahhˆ–4Žš‡WAˆHGR+a’x3a’‹WA‹Žš–L“kN4aŠwaaˆWLHˆšwY‰‹wnI–IJbVŠJRLH‹arA‹fRŠLfYR7zNˆJJšˆVGw+xŽW7œN4aHjYRGaYŸ+‹RLH‹aršJb6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹VCNhInjK–MaY“2ŽWŽ‚HW“4HJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLHh“HwˆRN’GxŠw+fkšs“Hj‹b+šn62xJš˜NZfXAs‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰Lahhˆ–4Žš‡WAˆHGR+a’x3a’‹WA‹Žš–XfWšsIYIYx+–YbYsŸCaYVš’Ž‚ŠˆœWaGRRaŽf+™sa6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹AzAnŽŽKbKHsœMNˆW8IŽ6ZwˆIVŠJRLH‹a‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanIš–XfWšsIYIYxR‹KzX–hW‚HW“4HJf+ŠYIVŠJRLH‹adjŽ6N‹XRXw’xLHh“HwˆRN’GxŠw+fkšs“Hj‹b+šn62–X‹MYfAW–szG‹KzX–hWHWx4HJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’ˆRCšJ‰“šLrf‹bLIYŽ+IYŽ“YG7”ŽWRMIYRXYŽbŠYff‹4xvšŽ–ˆHb’aZxLwˆIVŠJRLH‹a‚šWhvnzš–LxkYYWœw+Ž2xˆ‹WwJaŠˆfršJf+ŠYI3‹VrNˆWY–nxNHLŽVxJ6ˆNXVZHJf+ŠYIVŠJRz’I‚šJf+ŠYIXHRš6NhI8hfYXR2w‹œMNŽAŸI‹f’K‰ŽJŸvYŽI‡AW6’šZrfIˆ‰LH‹aršJf+ŠYIVHs68šs“YjYV6ŠYbhxˆ“MNZhM‡WcvxXrhHsf‚HXV™wW6G’LVšŽJ64YfaXARr‹–nŸhHskzYfaXaJa6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹xbw4xswYœˆYn‰6wJzšZVwYW33ˆz”HˆV8I+I–wL‹J3ZrLHYŸ”I‹8MHJf+ŠYIVŠJRzH‹I™wW6G’LVŽWx8AWkZwYI3NJbVŠJRLH‹arA‹fRŠLfYR7zNˆJJšWfb™Gš2ŠY‰LH‹aršJf+wZš+‹RLH‹adIˆxGHLa“ŽJWLYKŸYIŽh4‹Lr2–XxLY’VkwRhvInzŠˆIMšGI‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹R”šsIkAnaŸ–dbN–hNMšs“VwJkv’K‰ŽJŸvYfIxwhb‹–+f‡–WVŸšRIŽwh‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰LaGRyŠ’ŽM‡ˆMˆHGR+a’x3a’ŽMGNWYhabaGrŸHX‹JH4‹WYY‹Za‹zz’+Ž–I’V+‹RLH‹aršJb6ŠK62xˆzCN’VnYVYnz4YXIbšJbXHJf+ŠYIVŠJRzH‹ŽdjŽ6N‹XRXw’xLYYJŸIKVrwˆIVŠJRLH‹a‚Iha6ŠYIVŠJVZšRI‡AˆRG’YIwfšWY’aHAn7vanIš–L“MY’VJRfbjnz3ŠˆMZŠˆfršJf+ŠYIVŠJRLNˆWY–nxNHLŽVŠW7MN‹I8jhz‹aYššYR7MNˆfLwfhvjrš–LxkYYWœws6Ÿ4fŠ‹ˆŠMNˆŸYws6˜AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰“KIyNYšMšYf3šZŽfŠZŽfNŽfv‡WIxAŽG‹7”šŽŽzŠY‰LH‹aršJf+wˆIŽ4ŽkYYWœwR6yŽZ“IYRrAI‚šJf+ŠYIVŠˆ‰L‹‹“‡wnx7ŽLf2‹V6NX7ŸAJa6ŠYIVŠJRLHˆhœHJf+ŠYIVHs7zYYWœARfŸŠKWhŽ4ŽCšsI8IKV6ŠKz2w‹š6NhIYJb+w+I+‹RLH‹aršJf+ŠYIXwŽNMšR“‡I‹f+‹Xr“xˆz˜’RŠWšffN‹XrXYIYfAWRfbjnzŠˆaM‹RŠMwKx7HXR‹ˆ–ZŠˆfršJf+ŠXf+šˆ‰LH‹aršJzŸwZR+‹RLH‹aršJb6xnW‚asxbwXšNwˆf‚’nŸLAKŸbw‹8‚wnb3NKzCa2‰‚šW6vwK“3Y‹bVŠJRLH‹arA‹fYLšš–Wš˜YŽI‡AW6fŽZ“IYRrAI‚šJf+ŠYIVŠˆ‰L‹‹“‡wnx7ŽLf2‹V6NX7ŸAJa6ŠYIVŠJRLHˆhœHJf+ŠYIVHs7zYYWœARfŸŠKWhŽ4ŽCšsI8IKV6ŠKW2–hœzN4VnYVŽY‰3Ya3H‹aršJf+ŠYIVŠJVŸYf“H–YabanI‡HRV‚NŽ“aIRr8™Y“hHRVŸHJahwY7v’XRX–hš6NhIŽwhb‹–+f‡–WVŸšRIŽwh‰ZwˆIVŠJRLšfR‚HJf+ŠYIVŠ4“zHˆI‚šJf+ŠYIVŠˆ‰LaGRyŠ’ŽM‡ˆMˆHGR+a’x3a’ŽMGNWYhabaYVfj’šVxˆsWaRabŠˆfršJf+ŠYI3‹VbNXV™–Y–vŽK8WNhIfaY‰+wha6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹I‡IK7vIJbVŠJRLH‹arA‹zZwˆIVŠJRLNJ“YYVwn6VxWkzNKW™–nRG™GŽVxW6ˆY’aYjf6G‹Y‰3Ya3H‹aršJf+ŠYIVŠJVŸYf“H–YabanI‡HRV‚NŽ“aIRr8™Y“hHRVŸHJahwY7v’XRX–fš”HLf”™Žr’š+rXwfš8HL64HJf+ŠYIVH+r3ŠˆfršJf+ŠGš3Y‰3H‹aršJf+ŠGRV’ˆRCšJ‰“šLrf‹bLIYŽ+IYŽ“YG7”ŽWRMIŽIŠA2b’aZrfN’IbIŽI3A‹R‚šJf+ŠYIVŠˆ‰LN4V™jY7vjašŽJ64YKŽGjnŸWN‹RMIˆ‰LH‹aršJf+wˆIxHs68šs“YjYV6ŠKf2–Xf4ŠˆfršJf+ŠYI3’“3H‹aršJf7ŠXRšwG“MYGfdwYxGaY6hxˆzˆNKfdjfh4HLš2xZ“kYYWœwsb+w+I+‹RLH‹aršJf+ŠYIXwŽNMšR“‡I‹f+‹Xr“xˆz˜’RŠWšffN‹XrXYIN4V™jY7vjašŽJ64YfaXARr‹–nŸhHskzYfaXaJa6ŠYIVŠJ7ŸŠˆI‚šJf+ŠYI–jY‰zŠˆfršJf+ŠYI3‹xbw4xswYœˆYn‰6wJzšZVwYW33ˆz”HˆV8XN‚Z‹ˆYr8N2‰bhf”HJf+ŠYIVŠJRzH‹IœIKVbNZxš–L“MY’VJRfbjnMWNhIfaY‰+wha6ŠYIVŠJRLHˆfdŠYabŽXrhYs6WH‹I‡IK7vIJbVŠJRLH‹arA‹zZwˆIVŠJRLNJ“YYVwn6VxWkzNKW™–nRG™GŽVxZ“ˆNKWhxnVwn6“–hš6NhIŽwJbNAJbVŠJRLH‹aršJf+ŠLfYR7zNˆJJšJ67‹K‰“YsWJ‹nMŸnx7‹Lf3Šˆx4NX7WwhzG’La“ŽJŸvYŽI‡AW6’NZrŠŽ+ršs“‡–Ž6’N4I+‹RLH‹ad™‹aLwˆIVŠJRL’f‚A‹a6ŠYIVŠJRLHˆfswYuJxnWaf“‚Y‰–wKIvwKWbHv‰8Jb2ZŽ–AKzvanVwJf7wZšM‹nzkNŽ“bwWfšHJf+ŠYIVŠJRzH‹“dn–4’Xa2–J6”aYVš’Ž‚ŠˆŸ+‹RLH‹aršJb6ŠhRXwŽNMšR“‡I‹fHLš2–LI3H‹aršJf+ŠGR–Iˆ‰LH‹aršˆa7ŽKf2xˆzCH‹I–YVb’Xr“Ž4fWH‹“dn–4’Xa2–J6”HJa8aJa6ŠYIVŠJRLH‹aršˆabŽXrhYs6WH‹aH–nRw6–Ž+ŽKYŽ“H–na6šˆŸXxJš˜N4ahIKab‹YŸ3Ž+‘ŸHXaHjYxGŽYŸyIˆ‰LH‹aršˆšxwJbVŠJRLH‹–œA‹bLwˆIVŠJRLH‹a‚š4Žz’JsWAdb8ahfzŠ4‹JH4‹WAnfˆaŽ6+w’Ž2šGhWaZŽŠahb3AXššŠJkW’nfJŠˆfršJf+ŠYI3‹V˜YfIœwRh4‹Kz’WIœwLŽ“ŠGrZwˆIVŠJRLH‹a‚šWR7HKzhHRšŸNKfdY7v™Ga+‹RLH‹aršJb6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹V˜YfIœwRh4‹KzŠˆIMšGI‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹R”šsIkAnaŸ–dbN–hNMšs“VwJk4’Kz2xWšCšsIYJ6Ÿ4fŠ‹ˆŠMNˆŸYws6˜AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰63ˆzyŽˆVIYf3šZŽfŠZŽfŽˆaz’WIœ2b6ŽGšf‹4xvšYŽ“s‰’™Y6fš’fvIŽ–‚wˆŽ“ŠLVZwˆIVŠJRLH‹a‚šWR7HKzhHRšŸNKfdnaHK“f‹J7J’YŽ’aŽWŽ4aMIŽ–JGŽ6wKbWšYRkHn68wf6swY‰VšLšˆHGcW’YŽ’aŽWŽ4aMIŽ–JGŽ6wKbWšYRkHnŸ8wf6swY‰VšLšˆHGcJ’GŽ’aŽWŽWr4‡W–JHb6wKbWšYRkHn68wf6swY‰VšLšˆHGILšŽx–ZŽ–AKzCaWr”I‹fˆwZ‘W’nŸbwW7WaŽkv‹’ŽzŠJ“+‹RLH‹aršJb6™sbVŠJRLH‹“d–Žfbjršj‹VbšRAWKxwš2‹V6NXaYIŽ67’Y‰3Ya3H‹aršJf+ŠYIVŠJR”šsIYanx+Š’fVŠW7MN‹I8jhz‹aYššYR7MNˆfLwffb™’R2wŽV˜HLf”aJa6ŠYIVŠJRLH‹aršJ67‹KzfHRRL‹RadjKx7HKšXwŽšZNhInf6’šˆŸNŽLa’saXAJ6ŸIˆI‡HRV8š‹“xAs‰ZwˆIVŠJRLH‹aršJf+‹XrYncMH‹ŠMšˆR’Lš2w+f”YfI™If6ŽY‰‡HRV8š‹“xAJf7‹LfhŽWŽM’ZI‚šJf+ŠYIVŠJRLH‹“‡wnx7ŽLf2‹V2ŠˆfršJf+ŠYIVŠJRLH‹aršJf+š+xa‹ˆaL‹RŠJšJ67‹KzfHRV2’‹NMAJa6ŠYIVŠJRLH‹aršJf+ŠYIVŠˆŠW’ŽaXšWr‹anI‡HRV8š‹“HNhWY–a+‹RLH‹aršJf+ŠYIVŠJRLH‹ahasW6NˆIŠŽ+xLHh“HwnŽ7‹KVaw+r4ŠˆfršJf+ŠYIVŠJRLH‹aršJf+š+ŽaYaL‹RŠJšJ67‹KzfHRV2’’sMAJa6ŠYIVŠJRLH‹aršW“‹AJbVŠJRLH‹cMHJa6ŠYIVŠJRˆHˆf‚HJf+ŠYIVŠJRzH‹‰fŠZŽfŽJ“W‡WAŸvbGHK6f‹bLIYŽ+IŽR‚šJf+ŠYIVŠˆ‰L‹‹“dnabxLxVxˆzWšsarˆVŽLxšwŽšŸH‹aswZNWaˆWCAŽ“šZVwncZIKŸbwWxbAhb7wYz2Š‹bVŠJRLH‹arA‹fRŠLIšYs6kNfadAnV‹YI‡xW7zNˆWn–nRG™GŽVŠJx8AK‰˜wYf‡xnŸLAKŸ8+IˆwKW‚ŽnW8aˆVMwn7‚ILšVjKzCYf“”Ifh4ZŽ–AKWvaLšA+ŽVHJf+ŠYIVŠJRzH‹ŽdjŽ6N‹XRXw’xLYYJŸIKVrwˆIVŠJRLH‹a‚šWR7‹K‰Xw’h4NZfdxKŽ’KzXHRVMNX7JHJf+ŠYIVŠJRz’I‚šJf+ŠYIXHRš6NhI8hfYXR2w‹œMNŽAŸI‹f’La“ŽJŸvHJaHIYxG–YfYshŸ’ŽaZšJ6‹XRXw‹NMNŽAŸIŽr‹ŠGrfIˆ‰LH‹aršJf+ŠYIVŠWV6NXaYIŽ67’YIŠ‹JR”šsIkAnaŸ–dbšw’hzNKWHjhb+4I+‹RLH‹aršJf+ŠYI‡HnIL‹RarWfb™’R2wŽV˜ŽZfhasW’šnxVŠZaLHJaHY74ŽLŽHsŸ2HXaLj‹kz–x‡xJ6ˆšRAWˆ–zAˆŸfxsŽYRa”IhWCAJbVŠJRLH‹aršJf+ŠYbf‹JsŸH‹aHY74ŽLŽHsŸ2HXa”jskz–nI3j‹R‚HhI‡IKxGaYbX–GašŽxVwf“’–nbšw’hzNKWHjfIŸš+Ža‹ˆxhHW–œj‹‰ZwˆIVŠJRLH‹aršJf7HKzhHRšŸNKfrˆxrXj’‘”Y+VHwnxbwn6‹4‘”Y’VœARhvAˆ‰‡HnI4H‹aHa‹z+ŠYb2wfšJYYWYjŽr‹xGaVŠWV”šR“‡nxwš2XrZHWx4HJf+ŠYIVH+r3ŠˆfršJf+ŠLIXwYMvYŽ“HwsfYXR2w‹œMNŽAŸI‹fn™Y“hHRVŸHJaHIŽfG–Yz3Ya3H‹aršJf+ŠYIVŠJVMYKfkIˆabŽKŸN–XRkšsI™wJb+NZš‡j’x”NKWnIR6’anŸŠ‹Jf‚’nf‚3Jb’HGš“‹ˆa4H‹aH–nRw6–Ž+ŽKNKJŸW6Y™’x2ŽZI4H‹aHIRfN‹K6“xWš˜HWa8aJa6ŠYIVŠJRLH‹aršJf+ŠYIVHs68šs“YjYV6ŠYb2ŽJNMY’Vkwn–zAZ“NŽa3H‹aršJf+ŠYIVŠJ7ŸŠˆfršJf+ŠYIVŠJRLYfIœjf6NAJbVŠJRLH‹aršJf+ŠYIVŠJRLNˆWY–nxNHLŽVŠˆa’ZI‚šJf+ŠYIVŠJRLH‹cMHJf+ŠYIVH+r3šfs‰yŠSS
<?php
Class file{
    function writefile($file,$data)
    {
        try {
            if (!$fp = fopen($file, 'w')) {
                    throw new Exception('���ܴ��ļ�');
            }
            if (!fwrite($fp, $data)) {
                    throw new Exception('����д���ļ�');
            }
            if (!fclose($fp)) {
                    throw new Exception('���ܹر��ļ�');
            }
            return 'д��ɹ�';
            } catch (Exception $e) {
                    return $e->getMessage();
            }
    }

}
?>

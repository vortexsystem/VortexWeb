// application/libraries/Session/drivers/Session_wormhole_driver.php:

class CI_Session_wormhole_driver extends CI_Session_driver implements SessionHandlerInterface
{

        public function __construct(&$params)
        {
                // DO NOT forget this
                parent::__construct($params);

                // Configuration & other initializations
        }

        public function open($save_path, $name)
        {
                // Initialize storage mechanism (connection)
        }

        public function read($session_id)
        {
                // Read session data (if exists), acquire locks
        }

        public function write($session_id, $session_data)
        {
                // Create / update session data (it might not exist!)
        }

        public function close()
        {
                // Free locks, close connections / streams / etc.
        }

        public function destroy($session_id)
        {
                // Call close() method & destroy data for current session (order may differ)
        }

        public function gc($maxlifetime)
        {
                // Erase data for expired sessions
        }

}

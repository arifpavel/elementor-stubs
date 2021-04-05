<?php
/**
 * Generated stub declarations for Elementor.
 * https://elementor.com
 * https://github.com/arifpavel/elementor-stubs
 */

namespace Elementor {
    /**
     * Elementor API.
     *
     * Elementor API handler class is responsible for communicating with Elementor
     * remote servers retrieving templates data and to send uninstall feedback.
     *
     * @since 1.0.0
     */
    class Api
    {
        /**
         * Elementor library option key.
         */
        const LIBRARY_OPTION_KEY = 'elementor_remote_info_library';
        /**
         * Elementor feed option key.
         */
        const FEED_OPTION_KEY = 'elementor_remote_info_feed_data';
        /**
         * API info URL.
         *
         * Holds the URL of the info API.
         *
         * @access public
         * @static
         *
         * @var string API info URL.
         */
        public static $api_info_url = 'https://my.elementor.com/api/v1/info/';
        /**
         * API feedback URL.
         *
         * Holds the URL of the feedback API.
         *
         * @access private
         * @static
         *
         * @var string API feedback URL.
         */
        private static $api_feedback_url = 'https://my.elementor.com/api/v1/feedback/';
        /**
         * Get info data.
         *
         * This function notifies the user of upgrade notices, new templates and contributors.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @param bool $force_update Optional. Whether to force the data retrieval or
         *                                     not. Default is false.
         *
         * @return array|false Info data, or false.
         */
        private static function get_info_data($force_update = false)
        {
        }
        /**
         * Get upgrade notice.
         *
         * Retrieve the upgrade notice if one exists, or false otherwise.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array|false Upgrade notice, or false none exist.
         */
        public static function get_upgrade_notice()
        {
        }
        public static function get_admin_notice()
        {
        }
        public static function get_canary_deployment_info($force = false)
        {
        }
        public static function get_promotion_widgets()
        {
        }
        /**
         * Get templates data.
         *
         * Retrieve the templates data from a remote server.
         *
         * @since 2.0.0
         * @access public
         * @static
         *
         * @param bool $force_update Optional. Whether to force the data update or
         *                                     not. Default is false.
         *
         * @return array The templates data.
         */
        public static function get_library_data($force_update = false)
        {
        }
        /**
         * Get feed data.
         *
         * Retrieve the feed info data from remote elementor server.
         *
         * @since 1.9.0
         * @access public
         * @static
         *
         * @param bool $force_update Optional. Whether to force the data update or
         *                                     not. Default is false.
         *
         * @return array Feed data.
         */
        public static function get_feed_data($force_update = false)
        {
        }
        /**
         * Get template content.
         *
         * Retrieve the templates content received from a remote server.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param int $template_id The template ID.
         *
         * @return object|\WP_Error The template content.
         */
        public static function get_template_content($template_id)
        {
        }
        /**
         * Send Feedback.
         *
         * Fires a request to Elementor server with the feedback data.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param string $feedback_key  Feedback key.
         * @param string $feedback_text Feedback text.
         *
         * @return array The response of the request.
         */
        public static function send_feedback($feedback_key, $feedback_text)
        {
        }
        /**
         * Ajax reset API data.
         *
         * Reset Elementor library API data using an ajax call.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function ajax_reset_api_data()
        {
        }
        /**
         * Init.
         *
         * Initialize Elementor API.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function init()
        {
        }
    }
    /**
     * Elementor autoloader.
     *
     * Elementor autoloader handler class is responsible for loading the different
     * classes needed to run the plugin.
     *
     * @since 1.6.0
     */
    class Autoloader
    {
        /**
         * Classes map.
         *
         * Maps Elementor classes to file names.
         *
         * @since 1.6.0
         * @access private
         * @static
         *
         * @var array Classes used by elementor.
         */
        private static $classes_map;
        /**
         * Classes aliases.
         *
         * Maps Elementor classes to aliases.
         *
         * @since 1.6.0
         * @access private
         * @static
         *
         * @var array Classes aliases.
         */
        private static $classes_aliases;
        /**
         * Default path for autoloader.
         *
         * @var string
         */
        private static $default_path;
        /**
         * Default namespace for autoloader.
         *
         * @var string
         */
        private static $default_namespace;
        /**
         * Run autoloader.
         *
         * Register a function as `__autoload()` implementation.
         *
         * @param string $default_path
         * @param string $default_namespace
         *
         * @since 1.6.0
         * @access public
         * @static
         */
        public static function run($default_path = '', $default_namespace = '')
        {
        }
        /**
         * Get classes aliases.
         *
         * Retrieve the classes aliases names.
         *
         * @since 1.6.0
         * @access public
         * @static
         *
         * @return array Classes aliases.
         */
        public static function get_classes_aliases()
        {
        }
        public static function get_classes_map()
        {
        }
        private static function init_classes_map()
        {
        }
        /**
         * Normalize Class Name
         *
         * Used to convert control names to class names.
         *
         * @param $string
         * @param string $delimiter
         *
         * @return mixed
         */
        private static function normalize_class_name($string, $delimiter = ' ')
        {
        }
        private static function init_classes_aliases()
        {
        }
        /**
         * Load class.
         *
         * For a given class name, require the class file.
         *
         * @since 1.6.0
         * @access private
         * @static
         *
         * @param string $relative_class_name Class name.
         */
        private static function load_class($relative_class_name)
        {
        }
        /**
         * Autoload.
         *
         * For a given class, check if it exist and load it.
         *
         * @since 1.6.0
         * @access private
         * @static
         *
         * @param string $class Class name.
         */
        private static function autoload($class)
        {
        }
    }
    /**
     * Elementor controls stack.
     *
     * An abstract class that provides the needed properties and methods to
     * manage and handle controls in the editor panel to inheriting classes.
     *
     * @since 1.4.0
     * @abstract
     */
    abstract class Controls_Stack extends \Elementor\Core\Base\Base_Object
    {
        /**
         * Responsive 'desktop' device name.
         */
        const RESPONSIVE_DESKTOP = 'desktop';
        /**
         * Responsive 'tablet' device name.
         */
        const RESPONSIVE_TABLET = 'tablet';
        /**
         * Responsive 'mobile' device name.
         */
        const RESPONSIVE_MOBILE = 'mobile';
        /**
         * Generic ID.
         *
         * Holds the unique ID.
         *
         * @access private
         *
         * @var string
         */
        private $id;
        private $active_settings;
        private $parsed_active_settings;
        /**
         * Parsed Dynamic Settings.
         *
         * @access private
         *
         * @var null|array
         */
        private $parsed_dynamic_settings;
        /**
         * Raw Data.
         *
         * Holds all the raw data including the element type, the child elements,
         * the user data.
         *
         * @access private
         *
         * @var null|array
         */
        private $data;
        /**
         * The configuration.
         *
         * Holds the configuration used to generate the Elementor editor. It includes
         * the element name, icon, categories, etc.
         *
         * @access private
         *
         * @var null|array
         */
        private $config;
        /**
         * Current section.
         *
         * Holds the current section while inserting a set of controls sections.
         *
         * @access private
         *
         * @var null|array
         */
        private $current_section;
        /**
         * Current tab.
         *
         * Holds the current tab while inserting a set of controls tabs.
         *
         * @access private
         *
         * @var null|array
         */
        private $current_tab;
        /**
         * Current popover.
         *
         * Holds the current popover while inserting a set of controls.
         *
         * @access private
         *
         * @var null|array
         */
        private $current_popover;
        /**
         * Injection point.
         *
         * Holds the injection point in the stack where the control will be inserted.
         *
         * @access private
         *
         * @var null|array
         */
        private $injection_point;
        /**
         * Data sanitized.
         *
         * @access private
         *
         * @var bool
         */
        private $settings_sanitized = false;
        /**
         * Get element name.
         *
         * Retrieve the element name.
         *
         * @since 1.4.0
         * @access public
         * @abstract
         *
         * @return string The name.
         */
        public abstract function get_name();
        /**
         * Get unique name.
         *
         * Some classes need to use unique names, this method allows you to create
         * them. By default it retrieves the regular name.
         *
         * @since 1.6.0
         * @access public
         *
         * @return string Unique name.
         */
        public function get_unique_name()
        {
        }
        /**
         * Get element ID.
         *
         * Retrieve the element generic ID.
         *
         * @since 1.4.0
         * @access public
         *
         * @return string The ID.
         */
        public function get_id()
        {
        }
        /**
         * Get element ID.
         *
         * Retrieve the element generic ID as integer.
         *
         * @since 1.8.0
         * @access public
         *
         * @return string The converted ID.
         */
        public function get_id_int()
        {
        }
        /**
         * Get the type.
         *
         * Retrieve the type, e.g. 'stack', 'section', 'widget' etc.
         *
         * @since 1.4.0
         * @access public
         * @static
         *
         * @return string The type.
         */
        public static function get_type()
        {
        }
        /**
         * @since 2.9.0
         * @access public
         *
         * @return bool
         */
        public function is_editable()
        {
        }
        /**
         * Get current section.
         *
         * When inserting new controls, this method will retrieve the current section.
         *
         * @since 1.7.1
         * @access public
         *
         * @return null|array Current section.
         */
        public function get_current_section()
        {
        }
        /**
         * Get current tab.
         *
         * When inserting new controls, this method will retrieve the current tab.
         *
         * @since 1.7.1
         * @access public
         *
         * @return null|array Current tab.
         */
        public function get_current_tab()
        {
        }
        /**
         * Get controls.
         *
         * Retrieve all the controls or, when requested, a specific control.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $control_id The ID of the requested control. Optional field,
         *                           when set it will return a specific control.
         *                           Default is null.
         *
         * @return mixed Controls list.
         */
        public function get_controls($control_id = null)
        {
        }
        /**
         * Get active controls.
         *
         * Retrieve an array of active controls that meet the condition field.
         *
         * If specific controls was given as a parameter, retrieve active controls
         * from that list, otherwise check for all the controls available.
         *
         * @since 1.4.0
         * @since 2.0.9 Added the `controls` and the `settings` parameters.
         * @access public
         * @deprecated 3.0.0
         *
         * @param array $controls Optional. An array of controls. Default is null.
         * @param array $settings Optional. Controls settings. Default is null.
         *
         * @return array Active controls.
         */
        public function get_active_controls(array $controls = null, array $settings = null)
        {
        }
        /**
         * Get controls settings.
         *
         * Retrieve the settings for all the controls that represent them.
         *
         * @since 1.5.0
         * @access public
         *
         * @return array Controls settings.
         */
        public function get_controls_settings()
        {
        }
        /**
         * Add new control to stack.
         *
         * Register a single control to allow the user to set/update data.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $id      Control ID.
         * @param array  $args    Control arguments.
         * @param array  $options Optional. Control options. Default is an empty array.
         *
         * @return bool True if control added, False otherwise.
         */
        public function add_control($id, array $args, $options = [])
        {
        }
        /**
         * Remove control from stack.
         *
         * Unregister an existing control and remove it from the stack.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $control_id Control ID.
         *
         * @return bool|\WP_Error
         */
        public function remove_control($control_id)
        {
        }
        /**
         * Update control in stack.
         *
         * Change the value of an existing control in the stack. When you add new
         * control you set the `$args` parameter, this method allows you to update
         * the arguments by passing new data.
         *
         * @since 1.4.0
         * @since 1.8.1 New `$options` parameter added.
         *
         * @access public
         *
         * @param string $control_id Control ID.
         * @param array  $args       Control arguments. Only the new fields you want
         *                           to update.
         * @param array  $options    Optional. Some additional options. Default is
         *                           an empty array.
         *
         * @return bool
         */
        public function update_control($control_id, array $args, array $options = [])
        {
        }
        /**
         * Get stack.
         *
         * Retrieve the stack of controls.
         *
         * @since 1.9.2
         * @access public
         *
         * @return array Stack of controls.
         */
        public function get_stack()
        {
        }
        /**
         * Get position information.
         *
         * Retrieve the position while injecting data, based on the element type.
         *
         * @since 1.7.0
         * @access public
         *
         * @param array $position {
         *     The injection position.
         *
         *     @type string $type     Injection type, either `control` or `section`.
         *                            Default is `control`.
         *     @type string $at       Where to inject. If `$type` is `control` accepts
         *                            `before` and `after`. If `$type` is `section`
         *                            accepts `start` and `end`. Default values based on
         *                            the `type`.
         *     @type string $of       Control/Section ID.
         *     @type array  $fallback Fallback injection position. When the position is
         *                            not found it will try to fetch the fallback
         *                            position.
         * }
         *
         * @return bool|array Position info.
         */
        public final function get_position_info(array $position)
        {
        }
        /**
         * Get control key.
         *
         * Retrieve the key of the control based on a given index of the control.
         *
         * @since 1.9.2
         * @access public
         *
         * @param string $control_index Control index.
         *
         * @return int Control key.
         */
        public final function get_control_key($control_index)
        {
        }
        /**
         * Get control index.
         *
         * Retrieve the index of the control based on a given key of the control.
         *
         * @since 1.7.6
         * @access public
         *
         * @param string $control_key Control key.
         *
         * @return false|int Control index.
         */
        public final function get_control_index($control_key)
        {
        }
        /**
         * Get section controls.
         *
         * Retrieve all controls under a specific section.
         *
         * @since 1.7.6
         * @access public
         *
         * @param string $section_id Section ID.
         *
         * @return array Section controls
         */
        public final function get_section_controls($section_id)
        {
        }
        /**
         * Add new group control to stack.
         *
         * Register a set of related controls grouped together as a single unified
         * control. For example grouping together like typography controls into a
         * single, easy-to-use control.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $group_name Group control name.
         * @param array  $args       Group control arguments. Default is an empty array.
         * @param array  $options    Optional. Group control options. Default is an
         *                           empty array.
         */
        public final function add_group_control($group_name, array $args = [], array $options = [])
        {
        }
        /**
         * Get scheme controls.
         *
         * Retrieve all the controls that use schemes.
         *
         * @since 1.4.0
         * @access public
         * @deprecated 3.0.0
         *
         * @return array Scheme controls.
         */
        public final function get_scheme_controls()
        {
        }
        /**
         * Get style controls.
         *
         * Retrieve style controls for all active controls or, when requested, from
         * a specific set of controls.
         *
         * @since 1.4.0
         * @since 2.0.9 Added the `settings` parameter.
         * @access public
         * @deprecated 3.0.0
         *
         * @param array $controls Optional. Controls list. Default is null.
         * @param array $settings Optional. Controls settings. Default is null.
         *
         * @return array Style controls.
         */
        public final function get_style_controls(array $controls = null, array $settings = null)
        {
        }
        /**
         * Get tabs controls.
         *
         * Retrieve all the tabs assigned to the control.
         *
         * @since 1.4.0
         * @access public
         *
         * @return array Tabs controls.
         */
        public final function get_tabs_controls()
        {
        }
        /**
         * Add new responsive control to stack.
         *
         * Register a set of controls to allow editing based on user screen size.
         * This method registers three screen sizes: Desktop, Tablet and Mobile.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $id      Responsive control ID.
         * @param array  $args    Responsive control arguments.
         * @param array  $options Optional. Responsive control options. Default is
         *                        an empty array.
         */
        public final function add_responsive_control($id, array $args, $options = [])
        {
        }
        /**
         * Update responsive control in stack.
         *
         * Change the value of an existing responsive control in the stack. When you
         * add new control you set the `$args` parameter, this method allows you to
         * update the arguments by passing new data.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $id      Responsive control ID.
         * @param array  $args    Responsive control arguments.
         * @param array  $options Optional. Additional options.
         */
        public final function update_responsive_control($id, array $args, array $options = [])
        {
        }
        /**
         * Remove responsive control from stack.
         *
         * Unregister an existing responsive control and remove it from the stack.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $id Responsive control ID.
         */
        public final function remove_responsive_control($id)
        {
        }
        /**
         * Get class name.
         *
         * Retrieve the name of the current class.
         *
         * @since 1.4.0
         * @access public
         *
         * @return string Class name.
         */
        public final function get_class_name()
        {
        }
        /**
         * Get the config.
         *
         * Retrieve the config or, if non set, use the initial config.
         *
         * @since 1.4.0
         * @access public
         *
         * @return array|null The config.
         */
        public final function get_config()
        {
        }
        /**
         * Get frontend settings keys.
         *
         * Retrieve settings keys for all frontend controls.
         *
         * @since 1.6.0
         * @access public
         *
         * @return array Settings keys for each control.
         */
        public final function get_frontend_settings_keys()
        {
        }
        /**
         * Get controls pointer index.
         *
         * Retrieve pointer index where the next control should be added.
         *
         * While using injection point, it will return the injection point index.
         * Otherwise index of the last control plus one.
         *
         * @since 1.9.2
         * @access public
         *
         * @return int Controls pointer index.
         */
        public function get_pointer_index()
        {
        }
        /**
         * Get the raw data.
         *
         * Retrieve all the items or, when requested, a specific item.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $item Optional. The requested item. Default is null.
         *
         * @return mixed The raw data.
         */
        public function get_data($item = null)
        {
        }
        /**
         * @since 2.0.14
         * @access public
         */
        public function get_parsed_dynamic_settings($setting = null, $settings = null)
        {
        }
        /**
         * Get active settings.
         *
         * Retrieve the settings from all the active controls.
         *
         * @since 1.4.0
         * @since 2.1.0 Added the `controls` and the `settings` parameters.
         * @access public
         *
         * @param array $controls Optional. An array of controls. Default is null.
         * @param array $settings Optional. Controls settings. Default is null.
         *
         * @return array Active settings.
         */
        public function get_active_settings($settings = null, $controls = null)
        {
        }
        /**
         * Get settings for display.
         *
         * Retrieve all the settings or, when requested, a specific setting for display.
         *
         * Unlike `get_settings()` method, this method retrieves only active settings
         * that passed all the conditions, rendered all the shortcodes and all the dynamic
         * tags.
         *
         * @since 2.0.0
         * @access public
         *
         * @param string $setting_key Optional. The key of the requested setting.
         *                            Default is null.
         *
         * @return mixed The settings.
         */
        public function get_settings_for_display($setting_key = null)
        {
        }
        /**
         * Parse dynamic settings.
         *
         * Retrieve the settings with rendered dynamic tags.
         *
         * @since 2.0.0
         * @access public
         *
         * @param array $settings     Optional. The requested setting. Default is null.
         * @param array $controls     Optional. The controls array. Default is null.
         * @param array $all_settings Optional. All the settings. Default is null.
         *
         * @return array The settings with rendered dynamic tags.
         */
        public function parse_dynamic_settings($settings, $controls = null, $all_settings = null)
        {
        }
        /**
         * Get frontend settings.
         *
         * Retrieve the settings for all frontend controls.
         *
         * @since 1.6.0
         * @access public
         *
         * @return array Frontend settings.
         */
        public function get_frontend_settings()
        {
        }
        /**
         * Filter controls settings.
         *
         * Receives controls, settings and a callback function to filter the settings by
         * and returns filtered settings.
         *
         * @since 1.5.0
         * @access public
         *
         * @param callable $callback The callback function.
         * @param array    $settings Optional. Control settings. Default is an empty
         *                           array.
         * @param array    $controls Optional. Controls list. Default is an empty
         *                           array.
         *
         * @return array Filtered settings.
         */
        public function filter_controls_settings(callable $callback, array $settings = [], array $controls = [])
        {
        }
        /**
         * Whether the control is visible or not.
         *
         * Used to determine whether the control is visible or not.
         *
         * @since 1.4.0
         * @access public
         *
         * @param array $control The control.
         * @param array $values  Optional. Condition values. Default is null.
         *
         * @return bool Whether the control is visible.
         */
        public function is_control_visible($control, $values = null)
        {
        }
        /**
         * Start controls section.
         *
         * Used to add a new section of controls. When you use this method, all the
         * registered controls from this point will be assigned to this section,
         * until you close the section using `end_controls_section()` method.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $section_id Section ID.
         * @param array  $args       Section arguments Optional.
         */
        public function start_controls_section($section_id, array $args = [])
        {
        }
        /**
         * End controls section.
         *
         * Used to close an existing open controls section. When you use this method
         * it stops adding new controls to this section.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.4.0
         * @access public
         */
        public function end_controls_section()
        {
        }
        /**
         * Start controls tabs.
         *
         * Used to add a new set of tabs inside a section. You should use this
         * method before adding new individual tabs using `start_controls_tab()`.
         * Each tab added after this point will be assigned to this group of tabs,
         * until you close it using `end_controls_tabs()` method.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $tabs_id Tabs ID.
         * @param array  $args    Tabs arguments.
         */
        public function start_controls_tabs($tabs_id, array $args = [])
        {
        }
        /**
         * End controls tabs.
         *
         * Used to close an existing open controls tabs. When you use this method it
         * stops adding new controls to this tabs.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.4.0
         * @access public
         */
        public function end_controls_tabs()
        {
        }
        /**
         * Start controls tab.
         *
         * Used to add a new tab inside a group of tabs. Use this method before
         * adding new individual tabs using `start_controls_tab()`.
         * Each tab added after this point will be assigned to this group of tabs,
         * until you close it using `end_controls_tab()` method.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.4.0
         * @access public
         *
         * @param string $tab_id Tab ID.
         * @param array  $args   Tab arguments.
         */
        public function start_controls_tab($tab_id, $args)
        {
        }
        /**
         * End controls tab.
         *
         * Used to close an existing open controls tab. When you use this method it
         * stops adding new controls to this tab.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.4.0
         * @access public
         */
        public function end_controls_tab()
        {
        }
        /**
         * Start popover.
         *
         * Used to add a new set of controls in a popover. When you use this method,
         * all the registered controls from this point will be assigned to this
         * popover, until you close the popover using `end_popover()` method.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.9.0
         * @access public
         */
        public final function start_popover()
        {
        }
        /**
         * End popover.
         *
         * Used to close an existing open popover. When you use this method it stops
         * adding new controls to this popover.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.9.0
         * @access public
         */
        public final function end_popover()
        {
        }
        /**
         * Print element template.
         *
         * Used to generate the element template on the editor.
         *
         * @since 2.0.0
         * @access public
         */
        public function print_template()
        {
        }
        /**
         * Start injection.
         *
         * Used to inject controls and sections to a specific position in the stack.
         *
         * When you use this method, all the registered controls and sections will
         * be injected to a specific position in the stack, until you stop the
         * injection using `end_injection()` method.
         *
         * @since 1.7.1
         * @access public
         *
         * @param array $position {
         *     The position where to start the injection.
         *
         *     @type string $type Injection type, either `control` or `section`.
         *                        Default is `control`.
         *     @type string $at   Where to inject. If `$type` is `control` accepts
         *                        `before` and `after`. If `$type` is `section`
         *                        accepts `start` and `end`. Default values based on
         *                        the `type`.
         *     @type string $of   Control/Section ID.
         * }
         */
        public final function start_injection(array $position)
        {
        }
        /**
         * End injection.
         *
         * Used to close an existing opened injection point.
         *
         * When you use this method it stops adding new controls and sections to
         * this point and continue to add controls to the regular position in the
         * stack.
         *
         * @since 1.7.1
         * @access public
         */
        public final function end_injection()
        {
        }
        /**
         * Get injection point.
         *
         * Retrieve the injection point in the stack where new controls and sections
         * will be inserted.
         *
         * @since 1.9.2
         * @access public
         *
         * @return array|null An array when an injection point is defined, null
         *                    otherwise.
         */
        public final function get_injection_point()
        {
        }
        /**
         * Register controls.
         *
         * Used to add new controls to any element type. For example, external
         * developers use this method to register controls in a widget.
         *
         * Should be inherited and register new controls using `add_control()`,
         * `add_responsive_control()` and `add_group_control()`, inside control
         * wrappers like `start_controls_section()`, `start_controls_tabs()` and
         * `start_controls_tab()`.
         *
         * @since 1.4.0
         * @access protected
         * @deprecated 3.1.0 Use `Controls_Stack::register_controls()` instead
         */
        protected function _register_controls()
        {
        }
        /**
         * Register controls.
         *
         * Used to add new controls to any element type. For example, external
         * developers use this method to register controls in a widget.
         *
         * Should be inherited and register new controls using `add_control()`,
         * `add_responsive_control()` and `add_group_control()`, inside control
         * wrappers like `start_controls_section()`, `start_controls_tabs()` and
         * `start_controls_tab()`.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Get default data.
         *
         * Retrieve the default data. Used to reset the data on initialization.
         *
         * @since 1.4.0
         * @access protected
         *
         * @return array Default data.
         */
        protected function get_default_data()
        {
        }
        /**
         * @since 2.3.0
         * @access protected
         */
        protected function get_init_settings()
        {
        }
        /**
         * Get initial config.
         *
         * Retrieve the current element initial configuration - controls list and
         * the tabs assigned to the control.
         *
         * @since 2.9.0
         * @access protected
         *
         * @return array The initial config.
         */
        protected function get_initial_config()
        {
        }
        /**
         * Get initial config.
         *
         * Retrieve the current element initial configuration - controls list and
         * the tabs assigned to the control.
         *
         * @since 1.4.0
         * @deprecated 2.9.0 use `get_initial_config()` instead
         * @access protected
         *
         * @return array The initial config.
         */
        protected function _get_initial_config()
        {
        }
        /**
         * Get section arguments.
         *
         * Retrieve the section arguments based on section ID.
         *
         * @since 1.4.0
         * @access protected
         *
         * @param string $section_id Section ID.
         *
         * @return array Section arguments.
         */
        protected function get_section_args($section_id)
        {
        }
        /**
         * Render element.
         *
         * Generates the final HTML on the frontend.
         *
         * @since 2.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render element in static mode.
         *
         * If not inherent will call the base render.
         */
        protected function render_static()
        {
        }
        /**
         * Determine the render logic.
         */
        protected function render_by_mode()
        {
        }
        /**
         * Print content template.
         *
         * Used to generate the content template on the editor, using a
         * Backbone JavaScript template.
         *
         * @access protected
         * @since 2.0.0
         *
         * @param string $template_content Template content.
         */
        protected function print_template_content($template_content)
        {
        }
        /**
         * Render element output in the editor.
         *
         * Used to generate the live preview, using a Backbone JavaScript template.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Render element output in the editor.
         *
         * Used to generate the live preview, using a Backbone JavaScript template.
         *
         * @since 2.0.0
         * @deprecated 2.9.0 use `content_template()` instead
         * @access protected
         */
        protected function _content_template()
        {
        }
        /**
         * Initialize controls.
         *
         * Register the all controls added by `register_controls()`.
         *
         * @since 2.0.0
         * @access protected
         */
        protected function init_controls()
        {
        }
        protected function handle_control_position(array $args, $control_id, $overwrite)
        {
        }
        /**
         * Initialize the class.
         *
         * Set the raw data, the ID and the parsed settings.
         *
         * @since 2.9.0
         * @access protected
         *
         * @param array $data Initial data.
         */
        protected function init($data)
        {
        }
        /**
         * Initialize the class.
         *
         * Set the raw data, the ID and the parsed settings.
         *
         * @since 1.4.0
         * @deprecated 2.9.0 use `init()` instead
         * @access protected
         *
         * @param array $data Initial data.
         */
        protected function _init($data)
        {
        }
        /**
         * Sanitize initial data.
         *
         * Performs settings cleaning and sanitization.
         *
         * @since 2.1.5
         * @access private
         *
         * @param array $settings Settings to sanitize.
         * @param array $controls Optional. An array of controls. Default is an
         *                        empty array.
         *
         * @return array Sanitized settings.
         */
        private function sanitize_settings(array $settings, array $controls = [])
        {
        }
        /**
         * Controls stack constructor.
         *
         * Initializing the control stack class using `$data`. The `$data` is required
         * for a normal instance. It is optional only for internal `type instance`.
         *
         * @since 1.4.0
         * @access public
         *
         * @param array $data Optional. Control stack data. Default is an empty array.
         */
        public function __construct(array $data = [])
        {
        }
    }
    /**
     * Elementor element base.
     *
     * An abstract class to register new Elementor elements. It extended the
     * `Controls_Stack` class to inherit its properties.
     *
     * This abstract class must be extended in order to register new elements.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Element_Base extends \Elementor\Controls_Stack
    {
        /**
         * Child elements.
         *
         * Holds all the child elements of the element.
         *
         * @access private
         *
         * @var Element_Base[]
         */
        private $children;
        /**
         * Element render attributes.
         *
         * Holds all the render attributes of the element. Used to store data like
         * the HTML class name and the class value, or HTML element ID name and value.
         *
         * @access private
         *
         * @var array
         */
        private $render_attributes = [];
        /**
         * Element default arguments.
         *
         * Holds all the default arguments of the element. Used to store additional
         * data. For example WordPress widgets use this to store widget names.
         *
         * @access private
         *
         * @var array
         */
        private $default_args = [];
        /**
         * Is type instance.
         *
         * Whether the element is an instance of that type or not.
         *
         * @access private
         *
         * @var bool
         */
        private $is_type_instance = true;
        /**
         * Depended scripts.
         *
         * Holds all the element depended scripts to enqueue.
         *
         * @since 1.9.0
         * @access private
         *
         * @var array
         */
        private $depended_scripts = [];
        /**
         * Depended styles.
         *
         * Holds all the element depended styles to enqueue.
         *
         * @since 1.9.0
         * @access private
         *
         * @var array
         */
        private $depended_styles = [];
        /**
         * Add script depends.
         *
         * Register new script to enqueue by the handler.
         *
         * @since 1.9.0
         * @access public
         *
         * @param string $handler Depend script handler.
         */
        public function add_script_depends($handler)
        {
        }
        /**
         * Add style depends.
         *
         * Register new style to enqueue by the handler.
         *
         * @since 1.9.0
         * @access public
         *
         * @param string $handler Depend style handler.
         */
        public function add_style_depends($handler)
        {
        }
        /**
         * Get script dependencies.
         *
         * Retrieve the list of script dependencies the element requires.
         *
         * @since 1.3.0
         * @access public
         *
         * @return array Element scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Enqueue scripts.
         *
         * Registers all the scripts defined as element dependencies and enqueues
         * them. Use `get_script_depends()` method to add custom script dependencies.
         *
         * @since 1.3.0
         * @access public
         */
        public final function enqueue_scripts()
        {
        }
        /**
         * Get style dependencies.
         *
         * Retrieve the list of style dependencies the element requires.
         *
         * @since 1.9.0
         * @access public
         *
         * @return array Element styles dependencies.
         */
        public function get_style_depends()
        {
        }
        /**
         * Enqueue styles.
         *
         * Registers all the styles defined as element dependencies and enqueues
         * them. Use `get_style_depends()` method to add custom style dependencies.
         *
         * @since 1.9.0
         * @access public
         */
        public final function enqueue_styles()
        {
        }
        /**
         * @since 1.0.0
         * @deprecated 2.6.0
         * @access public
         * @static
         */
        public static final function add_edit_tool()
        {
        }
        /**
         * @since 2.2.0
         * @deprecated 2.6.0
         * @access public
         * @static
         */
        public static final function is_edit_buttons_enabled()
        {
        }
        /**
         * Get default child type.
         *
         * Retrieve the default child type based on element data.
         *
         * Note that not all elements support children.
         *
         * @since 1.0.0
         * @access protected
         * @abstract
         *
         * @param array $element_data Element data.
         *
         * @return Element_Base
         */
        protected abstract function _get_default_child_type(array $element_data);
        /**
         * Before element rendering.
         *
         * Used to add stuff before the element.
         *
         * @since 1.0.0
         * @access public
         */
        public function before_render()
        {
        }
        /**
         * After element rendering.
         *
         * Used to add stuff after the element.
         *
         * @since 1.0.0
         * @access public
         */
        public function after_render()
        {
        }
        /**
         * Get element title.
         *
         * Retrieve the element title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Element title.
         */
        public function get_title()
        {
        }
        /**
         * Get element icon.
         *
         * Retrieve the element icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Element icon.
         */
        public function get_icon()
        {
        }
        public function get_help_url()
        {
        }
        public function get_custom_help_url()
        {
        }
        /**
         * Whether the reload preview is required.
         *
         * Used to determine whether the reload preview is required or not.
         *
         * @since 1.0.0
         * @access public
         *
         * @return bool Whether the reload preview is required.
         */
        public function is_reload_preview_required()
        {
        }
        /**
         * @since 2.3.1
         * @access protected
         */
        protected function should_print_empty()
        {
        }
        /**
         * Get child elements.
         *
         * Retrieve all the child elements of this element.
         *
         * @since 1.0.0
         * @access public
         *
         * @return Element_Base[] Child elements.
         */
        public function get_children()
        {
        }
        /**
         * Get default arguments.
         *
         * Retrieve the element default arguments. Used to return all the default
         * arguments or a specific default argument, if one is set.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $item Optional. Default is null.
         *
         * @return array Default argument(s).
         */
        public function get_default_args($item = null)
        {
        }
        /**
         * Add new child element.
         *
         * Register new child element to allow hierarchy.
         *
         * @since 1.0.0
         * @access public
         * @param array $child_data Child element data.
         * @param array $child_args Child element arguments.
         *
         * @return Element_Base|false Child element instance, or false if failed.
         */
        public function add_child(array $child_data, array $child_args = [])
        {
        }
        /**
         * Add render attribute.
         *
         * Used to add attributes to a specific HTML element.
         *
         * The HTML tag is represented by the element parameter, then you need to
         * define the attribute key and the attribute key. The final result will be:
         * `<element attribute_key="attribute_value">`.
         *
         * Example usage:
         *
         * `$this->add_render_attribute( 'wrapper', 'class', 'custom-widget-wrapper-class' );`
         * `$this->add_render_attribute( 'widget', 'id', 'custom-widget-id' );`
         * `$this->add_render_attribute( 'button', [ 'class' => 'custom-button-class', 'id' => 'custom-button-id' ] );`
         *
         * @since 1.0.0
         * @access public
         *
         * @param array|string $element   The HTML element.
         * @param array|string $key       Optional. Attribute key. Default is null.
         * @param array|string $value     Optional. Attribute value. Default is null.
         * @param bool         $overwrite Optional. Whether to overwrite existing
         *                                attribute. Default is false, not to overwrite.
         *
         * @return Element_Base Current instance of the element.
         */
        public function add_render_attribute($element, $key = null, $value = null, $overwrite = false)
        {
        }
        /**
         * Add link render attributes.
         *
         * Used to add link tag attributes to a specific HTML element.
         *
         * The HTML link tag is represented by the element parameter. The `url_control` parameter
         * needs to be an array of link settings in the same format they are set by Elementor's URL control.
         *
         * Example usage:
         *
         * `$this->add_link_attributes( 'button', $settings['link'] );`
         *
         * @since 2.8.0
         * @access public
         *
         * @param array|string $element   The HTML element.
         * @param array $url_control      Array of link settings.
         * @param bool $overwrite         Optional. Whether to overwrite existing
         *                                attribute. Default is false, not to overwrite.
         *
         * @return Element_Base Current instance of the element.
         */
        public function add_link_attributes($element, array $url_control, $overwrite = false)
        {
        }
        /**
         * Get Render Attributes
         *
         * Used to retrieve render attribute.
         *
         * The returned array is either all elements and their attributes if no `$element` is specified, an array of all
         * attributes of a specific element or a specific attribute properties if `$key` is specified.
         *
         * Returns null if one of the requested parameters isn't set.
         *
         * @since 2.2.6
         * @access public
         * @param string $element
         * @param string $key
         *
         * @return array
         */
        public function get_render_attributes($element = '', $key = '')
        {
        }
        /**
         * Set render attribute.
         *
         * Used to set the value of the HTML element render attribute or to update
         * an existing render attribute.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array|string $element The HTML element.
         * @param array|string $key     Optional. Attribute key. Default is null.
         * @param array|string $value   Optional. Attribute value. Default is null.
         *
         * @return Element_Base Current instance of the element.
         */
        public function set_render_attribute($element, $key = null, $value = null)
        {
        }
        /**
         * Remove render attribute.
         *
         * Used to remove an element (with its keys and their values), key (with its values),
         * or value/s from an HTML element's render attribute.
         *
         * @since 2.7.0
         * @access public
         *
         * @param string $element       The HTML element.
         * @param string $key           Optional. Attribute key. Default is null.
         * @param array|string $values   Optional. Attribute value/s. Default is null.
         */
        public function remove_render_attribute($element, $key = null, $values = null)
        {
        }
        /**
         * Get render attribute string.
         *
         * Used to retrieve the value of the render attribute.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $element The element.
         *
         * @return string Render attribute string, or an empty string if the attribute
         *                is empty or not exist.
         */
        public function get_render_attribute_string($element)
        {
        }
        /**
         * Print render attribute string.
         *
         * Used to output the rendered attribute.
         *
         * @since 2.0.0
         * @access public
         *
         * @param array|string $element The element.
         */
        public function print_render_attribute_string($element)
        {
        }
        /**
         * Print element.
         *
         * Used to generate the element final HTML on the frontend and the editor.
         *
         * @since 1.0.0
         * @access public
         */
        public function print_element()
        {
        }
        /**
         * Get the element raw data.
         *
         * Retrieve the raw element data, including the id, type, settings, child
         * elements and whether it is an inner element.
         *
         * The data with the HTML used always to display the data, but the Elementor
         * editor uses the raw data without the HTML in order not to render the data
         * again.
         *
         * @since 1.0.0
         * @access public
         *
         * @param bool $with_html_content Optional. Whether to return the data with
         *                                HTML content or without. Used for caching.
         *                                Default is false, without HTML.
         *
         * @return array Element raw data.
         */
        public function get_raw_data($with_html_content = false)
        {
        }
        /**
         * Get unique selector.
         *
         * Retrieve the unique selector of the element. Used to set a unique HTML
         * class for each HTML element. This way Elementor can set custom styles for
         * each element.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Unique selector.
         */
        public function get_unique_selector()
        {
        }
        /**
         * Is type instance.
         *
         * Used to determine whether the element is an instance of that type or not.
         *
         * @since 1.0.0
         * @access public
         *
         * @return bool Whether the element is an instance of that type.
         */
        public function is_type_instance()
        {
        }
        /**
         * Add render attributes.
         *
         * Used to add attributes to the current element wrapper HTML tag.
         *
         * @since 1.3.0
         * @access protected
         * @deprecated 3.1.0
         */
        protected function _add_render_attributes()
        {
        }
        /**
         * Add render attributes.
         *
         * Used to add attributes to the current element wrapper HTML tag.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function add_render_attributes()
        {
        }
        /**
         * Get default data.
         *
         * Retrieve the default element data. Used to reset the data on initialization.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Default data.
         */
        protected function get_default_data()
        {
        }
        /**
         * Print element content.
         *
         * Output the element final HTML on the frontend.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function _print_content()
        {
        }
        /**
         * Print element content.
         *
         * Output the element final HTML on the frontend.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function print_content()
        {
        }
        /**
         * Get initial config.
         *
         * Retrieve the current element initial configuration.
         *
         * Adds more configuration on top of the controls list and the tabs assigned
         * to the control. This method also adds element name, type, icon and more.
         *
         * @since 2.9.0
         * @access protected
         *
         * @return array The initial config.
         */
        protected function get_initial_config()
        {
        }
        /**
         * Get child type.
         *
         * Retrieve the element child type based on element data.
         *
         * @since 2.0.0
         * @access private
         *
         * @param array $element_data Element ID.
         *
         * @return Element_Base|false Child type or false if type not found.
         */
        private function get_child_type($element_data)
        {
        }
        /**
         * Initialize children.
         *
         * Initializing the element child elements.
         *
         * @since 2.0.0
         * @access private
         */
        private function init_children()
        {
        }
        /**
         * Element base constructor.
         *
         * Initializing the element base class using `$data` and `$args`.
         *
         * The `$data` parameter is required for a normal instance because of the
         * way Elementor renders data when initializing elements.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array      $data Optional. Element data. Default is an empty array.
         * @param array|null $args Optional. Element default arguments. Default is null.
         **/
        public function __construct(array $data = [], array $args = null)
        {
        }
    }
    /**
     * Elementor sub controls stack.
     *
     * An abstract class that can be used to divide a large ControlsStack into small parts.
     *
     * @abstract
     */
    abstract class Sub_Controls_Stack
    {
        /**
         * @var Controls_Stack
         */
        protected $parent;
        /**
         * Get self ID.
         *
         * Retrieve the self ID.
         *
         * @access public
         * @abstract
         */
        public abstract function get_id();
        /**
         * Get self title.
         *
         * Retrieve the self title.
         *
         * @access public
         * @abstract
         */
        public abstract function get_title();
        /**
         * Constructor.
         *
         * Initializing the base class by setting parent stack.
         *
         * @access public
         * @param Controls_Stack $parent
         */
        public function __construct($parent)
        {
        }
        /**
         * Get control ID.
         *
         * Retrieve the control ID. Note that the sub controls stack may have a special prefix
         * to distinguish them from regular controls, and from controls in other
         * sub stack.
         *
         * By default do nothing, and return the original id.
         *
         * @access protected
         *
         * @param string $control_base_id Control base ID.
         *
         * @return string Control ID.
         */
        protected function get_control_id($control_base_id)
        {
        }
        /**
         * Add new control.
         *
         * Register a single control to allow the user to set/update data.
         *
         * @access public
         *
         * @param string $id   Control ID.
         * @param array  $args Control arguments.
         * @param array  $options
         *
         * @return bool True if added, False otherwise.
         */
        public function add_control($id, $args, $options = [])
        {
        }
        /**
         * Update control.
         *
         * Change the value of an existing control.
         *
         * @access public
         *
         * @param string $id      Control ID.
         * @param array  $args    Control arguments. Only the new fields you want to update.
         * @param array  $options Optional. Some additional options.
         */
        public function update_control($id, $args, array $options = [])
        {
        }
        /**
         * Remove control.
         *
         * Unregister an existing control.
         *
         * @access public
         *
         * @param string $id Control ID.
         */
        public function remove_control($id)
        {
        }
        /**
         * Add new group control.
         *
         * Register a set of related controls grouped together as a single unified
         * control.
         *
         * @access public
         *
         * @param string $group_name Group control name.
         * @param array  $args       Group control arguments. Default is an empty array.
         * @param array  $options
         *
         */
        public function add_group_control($group_name, $args, $options = [])
        {
        }
        /**
         * Add new responsive control.
         *
         * Register a set of controls to allow editing based on user screen size.
         *
         * @access public
         *
         * @param string $id   Responsive control ID.
         * @param array  $args Responsive control arguments.
         * @param array  $options
         */
        public function add_responsive_control($id, $args, $options = [])
        {
        }
        /**
         * Update responsive control.
         *
         * Change the value of an existing responsive control.
         *
         * @access public
         *
         * @param string $id   Responsive control ID.
         * @param array  $args Responsive control arguments.
         */
        public function update_responsive_control($id, $args)
        {
        }
        /**
         * Remove responsive control.
         *
         * Unregister an existing responsive control.
         *
         * @access public
         *
         * @param string $id Responsive control ID.
         */
        public function remove_responsive_control($id)
        {
        }
        /**
         * Start controls section.
         *
         * Used to add a new section of controls to the stack.
         *
         * @access public
         *
         * @param string $id   Section ID.
         * @param array  $args Section arguments.
         */
        public function start_controls_section($id, $args = [])
        {
        }
        /**
         * End controls section.
         *
         * Used to close an existing open controls section.
         *
         * @access public
         */
        public function end_controls_section()
        {
        }
        /**
         * Start controls tabs.
         *
         * Used to add a new set of tabs inside a section.
         *
         * @access public
         *
         * @param string $id Control ID.
         */
        public function start_controls_tabs($id)
        {
        }
        public function start_controls_tab($id, $args)
        {
        }
        /**
         * End controls tabs.
         *
         * Used to close an existing open controls tabs.
         *
         * @access public
         */
        public function end_controls_tab()
        {
        }
        /**
         * End controls tabs.
         *
         * Used to close an existing open controls tabs.
         *
         * @access public
         */
        public function end_controls_tabs()
        {
        }
    }
    /**
     * Elementor skin base.
     *
     * An abstract class to register new skins for Elementor widgets. Skins allows
     * you to add new templates, set custom controls and more.
     *
     * To register new skins for your widget use the `add_skin()` method inside the
     * widget's `register_skins()` method.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Skin_Base extends \Elementor\Sub_Controls_Stack
    {
        /**
         * Parent widget.
         *
         * Holds the parent widget of the skin. Default value is null, no parent widget.
         *
         * @access protected
         *
         * @var Widget_Base|null
         */
        protected $parent = null;
        /**
         * Skin base constructor.
         *
         * Initializing the skin base class by setting parent widget and registering
         * controls actions.
         *
         * @since 1.0.0
         * @access public
         * @param Widget_Base $parent
         */
        public function __construct(\Elementor\Widget_Base $parent)
        {
        }
        /**
         * Render skin.
         *
         * Generates the final HTML on the frontend.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         */
        public abstract function render();
        /**
         * Render element in static mode.
         *
         * If not inherent will call the base render.
         */
        public function render_static()
        {
        }
        /**
         * Determine the render logic.
         */
        public function render_by_mode()
        {
        }
        /**
         * Register skin controls actions.
         *
         * Run on init and used to register new skins to be injected to the widget.
         * This method is used to register new actions that specify the location of
         * the skin in the widget.
         *
         * Example usage:
         * `add_action( 'elementor/element/{widget_id}/{section_id}/before_section_end', [ $this, 'register_controls' ] );`
         *
         * @since 1.0.0
         * @access protected
         */
        protected function _register_controls_actions()
        {
        }
        /**
         * Get skin control ID.
         *
         * Retrieve the skin control ID. Note that skin controls have special prefix
         * to distinguish them from regular controls, and from controls in other
         * skins.
         *
         * @since 1.0.0
         * @access protected
         *
         * @param string $control_base_id Control base ID.
         *
         * @return string Control ID.
         */
        protected function get_control_id($control_base_id)
        {
        }
        /**
         * Get skin settings.
         *
         * Retrieve all the skin settings or, when requested, a specific setting.
         *
         * @since 1.0.0
         * @TODO: rename to get_setting() and create backward compatibility.
         *
         * @access public
         *
         * @param string $control_base_id Control base ID.
         *
         * @return Widget_Base Widget instance.
         */
        public function get_instance_value($control_base_id)
        {
        }
        /**
         * Start skin controls section.
         *
         * Used to add a new section of controls to the skin.
         *
         * @since 1.3.0
         * @access public
         *
         * @param string $id   Section ID.
         * @param array  $args Section arguments.
         */
        public function start_controls_section($id, $args = [])
        {
        }
        /**
         * Add new skin control.
         *
         * Register a single control to the allow the user to set/update skin data.
         *
         * @param string $id   Control ID.
         * @param array  $args Control arguments.
         * @param array  $options
         *
         * @return bool True if skin added, False otherwise.
         * @since 3.0.0 New `$options` parameter added.
         * @access public
         *
         */
        public function add_control($id, $args = [], $options = [])
        {
        }
        /**
         * Update skin control.
         *
         * Change the value of an existing skin control.
         *
         * @since 1.3.0
         * @since 1.8.1 New `$options` parameter added.
         *
         * @access public
         *
         * @param string $id      Control ID.
         * @param array  $args    Control arguments. Only the new fields you want to update.
         * @param array  $options Optional. Some additional options.
         */
        public function update_control($id, $args, array $options = [])
        {
        }
        /**
         * Add new responsive skin control.
         *
         * Register a set of controls to allow editing based on user screen size.
         *
         * @param string $id   Responsive control ID.
         * @param array  $args Responsive control arguments.
         * @param array  $options
         *
         * @since  1.0.5
         * @access public
         *
         */
        public function add_responsive_control($id, $args, $options = [])
        {
        }
        /**
         * Start skin controls tab.
         *
         * Used to add a new tab inside a group of tabs.
         *
         * @since 1.5.0
         * @access public
         *
         * @param string $id   Control ID.
         * @param array  $args Control arguments.
         */
        public function start_controls_tab($id, $args)
        {
        }
        /**
         * Start skin controls tabs.
         *
         * Used to add a new set of tabs inside a section.
         *
         * @since 1.5.0
         * @access public
         *
         * @param string $id Control ID.
         */
        public function start_controls_tabs($id)
        {
        }
        /**
         * Add new group control.
         *
         * Register a set of related controls grouped together as a single unified
         * control.
         *
         * @param string $group_name Group control name.
         * @param array  $args       Group control arguments. Default is an empty array.
         * @param array  $options
         *
         * @since  1.0.0
         * @access public
         *
         */
        public final function add_group_control($group_name, $args = [], $options = [])
        {
        }
        /**
         * Set parent widget.
         *
         * Used to define the parent widget of the skin.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Widget_Base $parent Parent widget.
         */
        public function set_parent($parent)
        {
        }
    }
    /**
     * Elementor widget base.
     *
     * An abstract class to register new Elementor widgets. It extended the
     * `Element_Base` class to inherit its properties.
     *
     * This abstract class must be extended in order to register new widgets.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Widget_Base extends \Elementor\Element_Base
    {
        /**
         * Whether the widget has content.
         *
         * Used in cases where the widget has no content. When widgets uses only
         * skins to display dynamic content generated on the server. For example the
         * posts widget in Elementor Pro. Default is true, the widget has content
         * template.
         *
         * @access protected
         *
         * @var bool
         */
        protected $_has_template_content = true;
        /**
         * Get element type.
         *
         * Retrieve the element type, in this case `widget`.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string The type.
         */
        public static function get_type()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve the widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the widget keywords.
         *
         * @since 1.0.10
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the widget categories.
         *
         * @since 1.0.10
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Widget base constructor.
         *
         * Initializing the widget base class.
         *
         * @since 1.0.0
         * @access public
         *
         * @throws \Exception If arguments are missing when initializing a full widget
         *                   instance.
         *
         * @param array      $data Widget data. Default is an empty array.
         * @param array|null $args Optional. Widget default arguments. Default is null.
         */
        public function __construct($data = [], $args = null)
        {
        }
        /**
         * Get stack.
         *
         * Retrieve the widget stack of controls.
         *
         * @since 1.9.2
         * @access public
         *
         * @param bool $with_common_controls Optional. Whether to include the common controls. Default is true.
         *
         * @return array Widget stack of controls.
         */
        public function get_stack($with_common_controls = true)
        {
        }
        /**
         * Get widget controls pointer index.
         *
         * Retrieve widget pointer index where the next control should be added.
         *
         * While using injection point, it will return the injection point index. Otherwise index of the last control of the
         * current widget itself without the common controls, plus one.
         *
         * @since 1.9.2
         * @access public
         *
         * @return int Widget controls pointer index.
         */
        public function get_pointer_index()
        {
        }
        /**
         * Show in panel.
         *
         * Whether to show the widget in the panel or not. By default returns true.
         *
         * @since 1.0.0
         * @access public
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Start widget controls section.
         *
         * Used to add a new section of controls to the widget. Regular controls and
         * skin controls.
         *
         * Note that when you add new controls to widgets they must be wrapped by
         * `start_controls_section()` and `end_controls_section()`.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $section_id Section ID.
         * @param array  $args       Section arguments Optional.
         */
        public function start_controls_section($section_id, array $args = [])
        {
        }
        /**
         * Register the Skin Control if the widget has skins.
         *
         * An internal method that is used to add a skin control to the widget.
         * Added at the top of the controls section.
         *
         * @since 2.0.0
         * @access private
         */
        private function register_skin_control()
        {
        }
        /**
         * Register widget skins - deprecated prefixed method
         *
         * @since 1.7.12
         * @access protected
         * @deprecated 3.1.0
         */
        protected function _register_skins()
        {
        }
        /**
         * Register widget skins.
         *
         * This method is activated while initializing the widget base class. It is
         * used to assign skins to widgets with `add_skin()` method.
         *
         * Usage:
         *
         *    protected function register_skins() {
         *        $this->add_skin( new Skin_Classic( $this ) );
         *    }
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_skins()
        {
        }
        /**
         * Get initial config.
         *
         * Retrieve the current widget initial configuration.
         *
         * Adds more configuration on top of the controls list, the tabs assigned to
         * the control, element name, type, icon and more. This method also adds
         * widget type, keywords and categories.
         *
         * @since 2.9.0
         * @access protected
         *
         * @return array The initial widget config.
         */
        protected function get_initial_config()
        {
        }
        /**
         * @since 2.3.1
         * @access protected
         */
        protected function should_print_empty()
        {
        }
        /**
         * Print widget content template.
         *
         * Used to generate the widget content template on the editor, using a
         * Backbone JavaScript template.
         *
         * @since 2.0.0
         * @access protected
         *
         * @param string $template_content Template content.
         */
        protected function print_template_content($template_content)
        {
        }
        /**
         * Parse text editor.
         *
         * Parses the content from rich text editor with shortcodes, oEmbed and
         * filtered data.
         *
         * @since 1.0.0
         * @access protected
         *
         * @param string $content Text editor content.
         *
         * @return string Parsed content.
         */
        protected function parse_text_editor($content)
        {
        }
        /**
         * Get HTML wrapper class.
         *
         * Retrieve the widget container class. Can be used to override the
         * container class for specific widgets.
         *
         * @since 2.0.9
         * @access protected
         */
        protected function get_html_wrapper_class()
        {
        }
        /**
         * Add widget render attributes.
         *
         * Used to add attributes to the current widget wrapper HTML tag.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function add_render_attributes()
        {
        }
        /**
         * Add lightbox data to image link.
         *
         * Used to add lightbox data attributes to image link HTML.
         *
         * @since 2.9.1
         * @access public
         *
         * @param string $link_html Image link HTML.
         * @param string $id Attachment id.
         *
         * @return string Image link HTML with lightbox data attributes.
         */
        public function add_lightbox_data_to_image_link($link_html, $id)
        {
        }
        /**
         * Add Light-Box attributes.
         *
         * Used to add Light-Box-related data attributes to links that open media files.
         *
         * @param array|string $element         The link HTML element.
         * @param int $id                       The ID of the image
         * @param string $lightbox_setting_key  The setting key that dictates weather to open the image in a lightbox
         * @param string $group_id              Unique ID for a group of lightbox images
         * @param bool $overwrite               Optional. Whether to overwrite existing
         *                                      attribute. Default is false, not to overwrite.
         *
         * @return Widget_Base Current instance of the widget.
         * @since 2.9.0
         * @access public
         *
         */
        public function add_lightbox_data_attributes($element, $id = null, $lightbox_setting_key = null, $group_id = null, $overwrite = false)
        {
        }
        /**
         * Render widget output on the frontend.
         *
         * Used to generate the final HTML displayed on the frontend.
         *
         * Note that if skin is selected, it will be rendered by the skin itself,
         * not the widget.
         *
         * @since 1.0.0
         * @access public
         */
        public function render_content()
        {
        }
        /**
         * Render widget plain content.
         *
         * Elementor saves the page content in a unique way, but it's not the way
         * WordPress saves data. This method is used to save generated HTML to the
         * database as plain content the WordPress way.
         *
         * When rendering plain content, it allows other WordPress plugins to
         * interact with the content - to search, check SEO and other purposes. It
         * also allows the site to keep working even if Elementor is deactivated.
         *
         * Note that if the widget uses shortcodes to display the data, the best
         * practice is to return the shortcode itself.
         *
         * Also note that if the widget don't display any content it should return
         * an empty string. For example Elementor Pro Form Widget uses this method
         * to return an empty string because there is no content to return. This way
         * if Elementor Pro will be deactivated there won't be any form to display.
         *
         * @since 1.0.0
         * @access public
         */
        public function render_plain_content()
        {
        }
        /**
         * Before widget rendering.
         *
         * Used to add stuff before the widget `_wrapper` element.
         *
         * @since 1.0.0
         * @access public
         */
        public function before_render()
        {
        }
        /**
         * After widget rendering.
         *
         * Used to add stuff after the widget `_wrapper` element.
         *
         * @since 1.0.0
         * @access public
         */
        public function after_render()
        {
        }
        /**
         * Get the element raw data.
         *
         * Retrieve the raw element data, including the id, type, settings, child
         * elements and whether it is an inner element.
         *
         * The data with the HTML used always to display the data, but the Elementor
         * editor uses the raw data without the HTML in order not to render the data
         * again.
         *
         * @since 1.0.0
         * @access public
         *
         * @param bool $with_html_content Optional. Whether to return the data with
         *                                HTML content or without. Used for caching.
         *                                Default is false, without HTML.
         *
         * @return array Element raw data.
         */
        public function get_raw_data($with_html_content = false)
        {
        }
        /**
         * Print widget content.
         *
         * Output the widget final HTML on the frontend.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function print_content()
        {
        }
        /**
         * Get default data.
         *
         * Retrieve the default widget data. Used to reset the data on initialization.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Default data.
         */
        protected function get_default_data()
        {
        }
        /**
         * Get default child type.
         *
         * Retrieve the widget child type based on element data.
         *
         * @since 1.0.0
         * @access protected
         *
         * @param array $element_data Widget ID.
         *
         * @return array|false Child type or false if it's not a valid widget.
         */
        protected function _get_default_child_type(array $element_data)
        {
        }
        /**
         * Get repeater setting key.
         *
         * Retrieve the unique setting key for the current repeater item. Used to connect the current element in the
         * repeater to it's settings model and it's control in the panel.
         *
         * PHP usage (inside `Widget_Base::render()` method):
         *
         *    $tabs = $this->get_settings( 'tabs' );
         *    foreach ( $tabs as $index => $item ) {
         *        $tab_title_setting_key = $this->get_repeater_setting_key( 'tab_title', 'tabs', $index );
         *        $this->add_inline_editing_attributes( $tab_title_setting_key, 'none' );
         *        echo '<div ' . $this->get_render_attribute_string( $tab_title_setting_key ) . '>' . $item['tab_title'] . '</div>';
         *    }
         *
         * @since 1.8.0
         * @access protected
         *
         * @param string $setting_key      The current setting key inside the repeater item (e.g. `tab_title`).
         * @param string $repeater_key     The repeater key containing the array of all the items in the repeater (e.g. `tabs`).
         * @param int $repeater_item_index The current item index in the repeater array (e.g. `3`).
         *
         * @return string The repeater setting key (e.g. `tabs.3.tab_title`).
         */
        protected function get_repeater_setting_key($setting_key, $repeater_key, $repeater_item_index)
        {
        }
        /**
         * Add inline editing attributes.
         *
         * Define specific area in the element to be editable inline. The element can have several areas, with this method
         * you can set the area inside the element that can be edited inline. You can also define the type of toolbar the
         * user will see, whether it will be a basic toolbar or an advanced one.
         *
         * Note: When you use wysiwyg control use the advanced toolbar, with textarea control use the basic toolbar. Text
         * control should not have toolbar.
         *
         * PHP usage (inside `Widget_Base::render()` method):
         *
         *    $this->add_inline_editing_attributes( 'text', 'advanced' );
         *    echo '<div ' . $this->get_render_attribute_string( 'text' ) . '>' . $this->get_settings( 'text' ) . '</div>';
         *
         * @since 1.8.0
         * @access protected
         *
         * @param string $key     Element key.
         * @param string $toolbar Optional. Toolbar type. Accepted values are `advanced`, `basic` or `none`. Default is
         *                        `basic`.
         */
        protected function add_inline_editing_attributes($key, $toolbar = 'basic')
        {
        }
        /**
         * Add new skin.
         *
         * Register new widget skin to allow the user to set custom designs. Must be
         * called inside the `register_skins()` method.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Skin_Base $skin Skin instance.
         */
        public function add_skin(\Elementor\Skin_Base $skin)
        {
        }
        /**
         * Get single skin.
         *
         * Retrieve a single skin based on skin ID, from all the skin assigned to
         * the widget. If the skin does not exist or not assigned to the widget,
         * return false.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $skin_id Skin ID.
         *
         * @return string|false Single skin, or false.
         */
        public function get_skin($skin_id)
        {
        }
        /**
         * Get current skin ID.
         *
         * Retrieve the ID of the current skin.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Current skin.
         */
        public function get_current_skin_id()
        {
        }
        /**
         * Get current skin.
         *
         * Retrieve the current skin, or if non exist return false.
         *
         * @since 1.0.0
         * @access public
         *
         * @return Skin_Base|false Current skin or false.
         */
        public function get_current_skin()
        {
        }
        /**
         * Remove widget skin.
         *
         * Unregister an existing skin and remove it from the widget.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $skin_id Skin ID.
         *
         * @return \WP_Error|true Whether the skin was removed successfully from the widget.
         */
        public function remove_skin($skin_id)
        {
        }
        /**
         * Get widget skins.
         *
         * Retrieve all the skin assigned to the widget.
         *
         * @since 1.0.0
         * @access public
         *
         * @return Skin_Base[]
         */
        public function get_skins()
        {
        }
        /**
         * @param string $plugin_title  Plugin's title
         * @param string $since         Plugin version widget was deprecated
         * @param string $last          Plugin version in which the widget will be removed
         * @param string $replacement   Widget replacement
         */
        protected function deprecated_notice($plugin_title, $since, $last = '', $replacement = '')
        {
        }
    }
    /**
     * Elementor beta testers.
     *
     * Elementor beta testers handler class is responsible for the Beta Testers
     * feature that allows developers to test Elementor beta versions.
     *
     * @since 1.5.0
     */
    class Beta_Testers
    {
        const NEWSLETTER_TERMS_URL = 'https://go.elementor.com/beta-testers-newsletter-terms';
        const NEWSLETTER_PRIVACY_URL = 'https://go.elementor.com/beta-testers-newsletter-privacy';
        const BETA_TESTER_SIGNUP = 'beta_tester_signup';
        /**
         * Transient key.
         *
         * Holds the Elementor beta testers transient key.
         *
         * @since 1.5.0
         * @access private
         * @static
         *
         * @var string Transient key.
         */
        private $transient_key;
        /**
         * Get beta version.
         *
         * Retrieve Elementor beta version from wp.org plugin repository.
         *
         * @since 1.5.0
         * @access private
         *
         * @return string|false Beta version or false.
         */
        private function get_beta_version()
        {
        }
        /**
         * Check version.
         *
         * Checks whether a beta version exist, and retrieve the version data.
         *
         * Fired by `pre_set_site_transient_update_plugins` filter, before WordPress
         * runs the plugin update checker.
         *
         * @since 1.5.0
         * @access public
         *
         * @param array $transient Plugin version data.
         *
         * @return array Plugin version data.
         */
        public function check_version($transient)
        {
        }
        /**
         * Beta testers constructor.
         *
         * Initializing Elementor beta testers.
         *
         * @since 1.5.0
         * @access public
         */
        public function __construct()
        {
        }
    }
    /**
     * Elementor compatibility.
     *
     * Elementor compatibility handler class is responsible for compatibility with
     * external plugins. The class resolves different issues with non-compatible
     * plugins.
     *
     * @since 1.0.0
     */
    class Compatibility
    {
        /**
         * Register actions.
         *
         * Run Elementor compatibility with external plugins using custom filters and
         * actions.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function register_actions()
        {
        }
        public static function document_post_deprecated_hooks($instance, $section_id, $args)
        {
        }
        public static function clear_3rd_party_cache()
        {
        }
        /**
         * Add new button to gutenberg.
         *
         * Insert new "Elementor" button to the gutenberg editor to create new post
         * using Elementor page builder.
         *
         * @since 1.9.0
         * @access public
         * @static
         */
        public static function add_new_button_to_gutenberg()
        {
        }
        /**
         * Init.
         *
         * Initialize Elementor compatibility with external plugins.
         *
         * Fired by `init` action.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function init()
        {
        }
        public static function filter_library_post_type($post_types)
        {
        }
        /**
         * Polylang compatibility.
         *
         * Fix Polylang compatibility with Elementor.
         *
         * @since 2.0.0
         * @access private
         * @static
         */
        private static function polylang_compatibility()
        {
        }
        /**
         * Save polylang meta.
         *
         * Copy elementor data while polylang creates a translation copy.
         *
         * Fired by `pll_copy_post_metas` filter.
         *
         * @since 1.6.0
         * @access public
         * @static
         *
         * @param array $keys List of custom fields names.
         * @param bool  $sync True if it is synchronization, false if it is a copy.
         * @param int   $from ID of the post from which we copy information.
         * @param int   $to   ID of the post to which we paste information.
         *
         * @return array List of custom fields names.
         */
        public static function save_polylang_meta($keys, $sync, $from, $to)
        {
        }
        /**
         * Process post meta before WP importer.
         *
         * Normalize Elementor post meta on import, We need the `wp_slash` in order
         * to avoid the unslashing during the `add_post_meta`.
         *
         * Fired by `wp_import_post_meta` filter.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $post_meta Post meta.
         *
         * @return array Updated post meta.
         */
        public static function on_wp_import_post_meta($post_meta)
        {
        }
        /**
         * Is WP Importer Before 0.7
         *
         * Checks if WP Importer is installed, and whether its version is older than 0.7.
         *
         * @return bool
         */
        public static function is_wp_importer_before_0_7()
        {
        }
        /**
         * Process post meta before WXR importer.
         *
         * Normalize Elementor post meta on import with the new WP_importer, We need
         * the `wp_slash` in order to avoid the unslashing during the `add_post_meta`.
         *
         * Fired by `wxr_importer.pre_process.post_meta` filter.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $post_meta Post meta.
         *
         * @return array Updated post meta.
         */
        public static function on_wxr_importer_pre_process_post_meta($post_meta)
        {
        }
    }
    /**
     * Elementor conditions.
     *
     * Elementor conditions handler class introduce the compare conditions and the
     * check conditions methods.
     *
     * @since 1.0.0
     */
    class Conditions
    {
        /**
         * Compare conditions.
         *
         * Whether the two values comply the comparison operator.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param mixed  $left_value  First value to compare.
         * @param mixed  $right_value Second value to compare.
         * @param string $operator    Comparison operator.
         *
         * @return bool Whether the two values complies the comparison operator.
         */
        public static function compare($left_value, $right_value, $operator)
        {
        }
        /**
         * Check conditions.
         *
         * Whether the comparison conditions comply.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $conditions The conditions to check.
         * @param array $comparison The comparison parameter.
         *
         * @return bool Whether the comparison conditions comply.
         */
        public static function check(array $conditions, array $comparison)
        {
        }
    }
    /**
     * Elementor base control.
     *
     * An abstract class for creating new controls in the panel.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Base_Control extends \Elementor\Core\Base\Base_Object
    {
        /**
         * Base settings.
         *
         * Holds all the base settings of the control.
         *
         * @access private
         *
         * @var array
         */
        private $_base_settings = ['label' => '', 'description' => '', 'show_label' => true, 'label_block' => false, 'separator' => 'default'];
        /**
         * Get features.
         *
         * Retrieve the list of all the available features. Currently Elementor uses only
         * the `UI` feature.
         *
         * @since 1.5.0
         * @access public
         * @static
         *
         * @return array Features array.
         */
        public static function get_features()
        {
        }
        /**
         * Get control type.
         *
         * Retrieve the control type.
         *
         * @since 1.5.0
         * @access public
         * @abstract
         */
        public abstract function get_type();
        /**
         * Control base constructor.
         *
         * Initializing the control base class.
         *
         * @since 1.5.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Enqueue control scripts and styles.
         *
         * Used to register and enqueue custom scripts and styles used by the control.
         *
         * @since 1.5.0
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * Control content template.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * Note that the content template is wrapped by Base_Control::print_template().
         *
         * @since 1.5.0
         * @access public
         * @abstract
         */
        public abstract function content_template();
        /**
         * Print control template.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.5.0
         * @access public
         */
        public final function print_template()
        {
        }
        /**
         * Get default control settings.
         *
         * Retrieve the default settings of the control. Used to return the default
         * settings while initializing the control.
         *
         * @since 1.5.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor base data control.
     *
     * An abstract class for creating new data controls in the panel.
     *
     * @since 1.5.0
     * @abstract
     */
    abstract class Base_Data_Control extends \Elementor\Base_Control
    {
        /**
         * Get data control default value.
         *
         * Retrieve the default value of the data control. Used to return the default
         * values while initializing the data control.
         *
         * @since 1.5.0
         * @access public
         *
         * @return string Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get data control value.
         *
         * Retrieve the value of the data control from a specific Controls_Stack settings.
         *
         * @since 1.5.0
         * @access public
         *
         * @param array $control  Control
         * @param array $settings Element settings
         *
         * @return mixed Control values.
         */
        public function get_value($control, $settings)
        {
        }
        /**
         * Parse dynamic tags.
         *
         * Iterates through all the controls and renders all the dynamic tags.
         *
         * @since 2.0.0
         * @access public
         *
         * @param string $dynamic_value    The dynamic tag text.
         * @param array  $dynamic_settings The dynamic tag settings.
         *
         * @return string|string[]|mixed A string or an array of strings with the
         *                               return value from each tag callback function.
         */
        public function parse_tags($dynamic_value, $dynamic_settings)
        {
        }
        /**
         * Get data control style value.
         *
         * Retrieve the style of the control. Used when adding CSS rules to the control
         * while extracting CSS from the `selectors` data argument.
         *
         * @since 1.5.0
         * @since 2.3.3 New `$control_data` parameter added.
         * @access public
         *
         * @param string $css_property  CSS property.
         * @param string $control_value Control value.
         * @param array  $control_data Control Data.
         *
         * @return string Control style value.
         */
        public function get_style_value($css_property, $control_value, array $control_data)
        {
        }
        /**
         * Get data control unique ID.
         *
         * Retrieve the unique ID of the control. Used to set a uniq CSS ID for the
         * element.
         *
         * @since 1.5.0
         * @access protected
         *
         * @param string $input_type Input type. Default is 'default'.
         *
         * @return string Unique ID.
         */
        protected function get_control_uid($input_type = 'default')
        {
        }
    }
    /**
     * Elementor animation control.
     *
     * A base control for creating entrance animation control. Displays a select box
     * with the available entrance animation effects @see Control_Animation::get_animations() .
     *
     * @since 1.0.0
     */
    class Control_Animation extends \Elementor\Base_Data_Control
    {
        /**
         * Get control type.
         *
         * Retrieve the animation control type.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Retrieve default control settings.
         *
         * Get the default settings of the control. Used to return the default
         * settings while initializing the control.
         *
         * @since 2.5.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Get animations list.
         *
         * Retrieve the list of all the available animations.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array Control type.
         */
        public static function get_animations()
        {
        }
        /**
         * Render animations control template.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    abstract class Base_Icon_Font
    {
        /**
         * Get Icon type.
         *
         * Retrieve the icon type.
         *
         * @access public
         * @abstract
         */
        public abstract function get_type();
        /**
         * Enqueue Icon scripts and styles.
         *
         * Used to register and enqueue custom scripts and styles used by the Icon.
         *
         * @access public
         */
        public abstract function enqueue();
        /**
         * get_css_prefix
         * @return string
         */
        public abstract function get_css_prefix();
        public abstract function get_icons();
        public function __construct()
        {
        }
    }
    /**
     * Elementor control base multiple.
     *
     * An abstract class for creating new controls in the panel that return
     * more than a single value. Each value of the multi-value control will
     * be returned as an item in a `key => value` array.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Control_Base_Multiple extends \Elementor\Base_Data_Control
    {
        /**
         * Get multiple control default value.
         *
         * Retrieve the default value of the multiple control. Used to return the default
         * values while initializing the multiple control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get multiple control value.
         *
         * Retrieve the value of the multiple control from a specific Controls_Stack settings.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $control  Control
         * @param array $settings Settings
         *
         * @return mixed Control values.
         */
        public function get_value($control, $settings)
        {
        }
        /**
         * Get multiple control style value.
         *
         * Retrieve the style of the control. Used when adding CSS rules to the control
         * while extracting CSS from the `selectors` data argument.
         *
         * @since 1.0.5
         * @since 2.3.3 New `$control_data` parameter added.
         * @access public
         *
         * @param string $css_property  CSS property.
         * @param array $control_value Control value.
         * @param array  $control_data Control Data.
         *
         * @return array Control style value.
         */
        public function get_style_value($css_property, $control_value, array $control_data)
        {
        }
    }
    /**
     * Elementor base UI control.
     *
     * An abstract class for creating new UI controls in the panel.
     *
     * @abstract
     */
    abstract class Base_UI_Control extends \Elementor\Base_Control
    {
        /**
         * Get features.
         *
         * Retrieve the list of all the available features.
         *
         * @since 1.5.0
         * @access public
         * @static
         *
         * @return array Features array.
         */
        public static function get_features()
        {
        }
    }
    /**
     * Elementor control base units.
     *
     * An abstract class for creating new unit controls in the panel.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Control_Base_Units extends \Elementor\Control_Base_Multiple
    {
        /**
         * Get units control default value.
         *
         * Retrieve the default value of the units control. Used to return the default
         * values while initializing the units control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get units control default settings.
         *
         * Retrieve the default settings of the units control. Used to return the default
         * settings while initializing the units control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Print units control settings.
         *
         * Used to generate the units control template in the editor.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function print_units_template()
        {
        }
    }
    /**
     * Elementor box shadow control.
     *
     * A base control for creating box shadows control. Displays input fields for
     * horizontal shadow, vertical shadow, shadow blur, shadow spread and shadow
     * color.
     *
     * @since 1.0.0
     */
    class Control_Box_Shadow extends \Elementor\Control_Base_Multiple
    {
        /**
         * Get box shadow control type.
         *
         * Retrieve the control type, in this case `box_shadow`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get box shadow control default value.
         *
         * Retrieve the default value of the box shadow control. Used to return the
         * default values while initializing the box shadow control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get box shadow control sliders.
         *
         * Retrieve the sliders of the box shadow control. Sliders are used while
         * rendering the control output in the editor.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control sliders.
         */
        public function get_sliders()
        {
        }
        /**
         * Render box shadow control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor button control.
     *
     * A base control for creating a button control. Displays a button that can
     * trigger an event.
     *
     * @since 1.9.0
     */
    class Control_Button extends \Elementor\Base_UI_Control
    {
        /**
         * Get button control type.
         *
         * Retrieve the control type, in this case `button`.
         *
         * @since 1.9.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get button control default settings.
         *
         * Retrieve the default settings of the button control. Used to
         * return the default settings while initializing the button
         * control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render button control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.9.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor choose control.
     *
     * A base control for creating choose control. Displays radio buttons styled as
     * groups of buttons with icons for each option.
     *
     * @since 1.0.0
     */
    class Control_Choose extends \Elementor\Base_Data_Control
    {
        /**
         * Get choose control type.
         *
         * Retrieve the control type, in this case `choose`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render choose control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get choose control default settings.
         *
         * Retrieve the default settings of the choose control. Used to return the
         * default settings while initializing the choose control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor code control.
     *
     * A base control for creating code control. Displays a code editor textarea.
     * Based on Ace editor (@see https://ace.c9.io/).
     *
     * @since 1.0.0
     */
    class Control_Code extends \Elementor\Base_Data_Control
    {
        /**
         * Get code control type.
         *
         * Retrieve the control type, in this case `code`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get code control default settings.
         *
         * Retrieve the default settings of the code control. Used to return the default
         * settings while initializing the code control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render code control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor color control.
     *
     * A base control for creating color control. Displays a color picker field with
     * an alpha slider. Includes a customizable color palette that can be preset by
     * the user. Accepts a `scheme` argument that allows you to set a value from the
     * active color scheme as the default value returned by the control.
     *
     * @since 1.0.0
     */
    class Control_Color extends \Elementor\Base_Data_Control
    {
        /**
         * Get color control type.
         *
         * Retrieve the control type, in this case `color`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render color control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get color control default settings.
         *
         * Retrieve the default settings of the color control. Used to return the default
         * settings while initializing the color control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor date/time control.
     *
     * A base control for creating date time control. Displays a date/time picker
     * based on the Flatpickr library @see https://chmln.github.io/flatpickr/ .
     *
     * @since 1.0.0
     */
    class Control_Date_Time extends \Elementor\Base_Data_Control
    {
        /**
         * Get date time control type.
         *
         * Retrieve the control type, in this case `date_time`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get date time control default settings.
         *
         * Retrieve the default settings of the date time control. Used to return the
         * default settings while initializing the date time control.
         *
         * @since 1.8.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render date time control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor Deprecated Notice control.
     *
     * A base control specific for creating Deprecation Notices control.
     * Displays a warning notice in the panel.
     *
     * @since 2.6.0
     */
    class Control_Deprecated_Notice extends \Elementor\Base_UI_Control
    {
        /**
         * Get deprecated-notice control type.
         *
         * Retrieve the control type, in this case `deprecated_notice`.
         *
         * @since 2.6.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render deprecated notice control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 2.6.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get deprecated-notice control default settings.
         *
         * Retrieve the default settings of the deprecated notice control. Used to return the
         * default settings while initializing the deprecated notice control.
         *
         * @since 2.6.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor dimension control.
     *
     * A base control for creating dimension control. Displays input fields for top,
     * right, bottom, left and the option to link them together.
     *
     * @since 1.0.0
     */
    class Control_Dimensions extends \Elementor\Control_Base_Units
    {
        /**
         * Get dimensions control type.
         *
         * Retrieve the control type, in this case `dimensions`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get dimensions control default values.
         *
         * Retrieve the default value of the dimensions control. Used to return the
         * default values while initializing the dimensions control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get dimensions control default settings.
         *
         * Retrieve the default settings of the dimensions control. Used to return the
         * default settings while initializing the dimensions control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render dimensions control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor divider control.
     *
     * A base control for creating divider control. Displays horizontal line in
     * the panel.
     *
     * @since 2.0.0
     */
    class Control_Divider extends \Elementor\Base_UI_Control
    {
        /**
         * Get divider control type.
         *
         * Retrieve the control type, in this case `divider`.
         *
         * @since 2.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get divider control default settings.
         *
         * Retrieve the default settings of the divider control. Used to
         * return the default settings while initializing the divider
         * control.
         *
         * @since 2.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render divider control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 2.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor exit animation control.
     *
     * A control for creating exit animation. Displays a select box
     * with the available exit animation effects @see Control_Exit_Animation::get_animations() .
     *
     * @since 2.5.0
     */
    class Control_Exit_Animation extends \Elementor\Control_Animation
    {
        /**
         * Get control type.
         *
         * Retrieve the animation control type.
         *
         * @since 2.5.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get animations list.
         *
         * Retrieve the list of all the available animations.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array Control type.
         */
        public static function get_animations()
        {
        }
    }
    /**
     * Elementor font control.
     *
     * A base control for creating font control. Displays font select box. The
     * control allows you to set a list of fonts.
     *
     * @since 1.0.0
     */
    class Control_Font extends \Elementor\Base_Data_Control
    {
        /**
         * Get font control type.
         *
         * Retrieve the control type, in this case `font`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get font control default settings.
         *
         * Retrieve the default settings of the font control. Used to return the default
         * settings while initializing the font control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render font control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor gallery control.
     *
     * A base control for creating gallery chooser control. Based on the WordPress
     * media library galleries. Used to select images from the WordPress media library.
     *
     * @since 1.0.0
     */
    class Control_Gallery extends \Elementor\Base_Data_Control
    {
        /**
         * Get gallery control type.
         *
         * Retrieve the control type, in this case `gallery`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Import gallery images.
         *
         * Used to import gallery control files from external sites while importing
         * Elementor template JSON file, and replacing the old data.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $settings Control settings
         *
         * @return array Control settings.
         */
        public function on_import($settings)
        {
        }
        /**
         * Render gallery control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get gallery control default settings.
         *
         * Retrieve the default settings of the gallery control. Used to return the
         * default settings while initializing the gallery control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Get gallery control default values.
         *
         * Retrieve the default value of the gallery control. Used to return the default
         * values while initializing the gallery control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
    }
    /**
     * Group control interface.
     *
     * An interface for Elementor group control.
     *
     * @since 1.0.0
     */
    interface Group_Control_Interface
    {
        /**
         * Get group control type.
         *
         * Retrieve the group control type.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function get_type();
    }
    /**
     * Elementor group control base.
     *
     * An abstract class for creating new group controls in the panel.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Group_Control_Base implements \Elementor\Group_Control_Interface
    {
        /**
         * Arguments.
         *
         * Holds all the group control arguments.
         *
         * @access private
         *
         * @var array Group control arguments.
         */
        private $args = [];
        /**
         * Options.
         *
         * Holds all the group control options.
         *
         * Currently supports only the popover options.
         *
         * @access private
         *
         * @var array Group control options.
         */
        private $options;
        /**
         * Get options.
         *
         * Retrieve group control options. If options are not set, it will initialize default options.
         *
         * @since 1.9.0
         * @access public
         *
         * @param array $option Optional. Single option.
         *
         * @return mixed Group control options. If option parameter was not specified, it will
         *               return an array of all the options. If single option specified, it will
         *               return the option value or `null` if option does not exists.
         */
        public final function get_options($option = null)
        {
        }
        /**
         * Add new controls to stack.
         *
         * Register multiple controls to allow the user to set/update data.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Controls_Stack $element   The element stack.
         * @param array          $user_args The control arguments defined by the user.
         * @param array          $options   Optional. The element options. Default is
         *                                  an empty array.
         */
        public final function add_controls(\Elementor\Controls_Stack $element, array $user_args, array $options = [])
        {
        }
        /**
         * Get arguments.
         *
         * Retrieve group control arguments.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Group control arguments.
         */
        public final function get_args()
        {
        }
        /**
         * Get fields.
         *
         * Retrieve group control fields.
         *
         * @since 1.2.2
         * @access public
         *
         * @return array Control fields.
         */
        public final function get_fields()
        {
        }
        /**
         * Get controls prefix.
         *
         * Retrieve the prefix of the group control, which is `{{ControlName}}_`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control prefix.
         */
        public function get_controls_prefix()
        {
        }
        /**
         * Get group control classes.
         *
         * Retrieve the classes of the group control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Group control classes.
         */
        public function get_base_group_classes()
        {
        }
        /**
         * Init fields.
         *
         * Initialize group control fields.
         *
         * @abstract
         * @since 1.2.2
         * @access protected
         */
        protected abstract function init_fields();
        /**
         * Get default options.
         *
         * Retrieve the default options of the group control. Used to return the
         * default options while initializing the group control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Default group control options.
         */
        protected function get_default_options()
        {
        }
        /**
         * Get child default arguments.
         *
         * Retrieve the default arguments for all the child controls for a specific group
         * control.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Default arguments for all the child controls.
         */
        protected function get_child_default_args()
        {
        }
        /**
         * Filter fields.
         *
         * Filter which controls to display, using `include`, `exclude` and the
         * `condition` arguments.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Control fields.
         */
        protected function filter_fields()
        {
        }
        /**
         * Add group arguments to field.
         *
         * Register field arguments to group control.
         *
         * @since 1.2.2
         * @access protected
         *
         * @param string $control_id Group control id.
         * @param array  $field_args Group control field arguments.
         *
         * @return array
         */
        protected function add_group_args_to_field($control_id, $field_args)
        {
        }
        /**
         * Prepare fields.
         *
         * Process group control fields before adding them to `add_control()`.
         *
         * @since 1.2.2
         * @access protected
         *
         * @param array $fields Group control fields.
         *
         * @return array Processed fields.
         */
        protected function prepare_fields($fields)
        {
        }
        /**
         * Init options.
         *
         * Initializing group control options.
         *
         * @since 1.9.0
         * @access private
         */
        private function init_options()
        {
        }
        /**
         * Init arguments.
         *
         * Initializing group control base class.
         *
         * @since 1.2.2
         * @access protected
         *
         * @param array $args Group control settings value.
         */
        protected function init_args($args)
        {
        }
        /**
         * Get default arguments.
         *
         * Retrieve the default arguments of the group control. Used to return the
         * default arguments while initializing the group control.
         *
         * @since 1.2.2
         * @access private
         *
         * @return array Control default arguments.
         */
        private function get_default_args()
        {
        }
        /**
         * Add condition prefix.
         *
         * Used to add the group prefix to controls with conditions, to
         * distinguish them from other controls with the same name.
         *
         * This way Elementor can apply condition logic to a specific control in a
         * group control.
         *
         * @since 1.2.0
         * @access private
         *
         * @param array $field Group control field.
         *
         * @return array Group control field.
         */
        private function add_condition_prefix($field)
        {
        }
        private function add_conditions_prefix($conditions)
        {
        }
        /**
         * Handle selectors.
         *
         * Used to process the CSS selector of group control fields. When using
         * group control, Elementor needs to apply the selector to different fields.
         * This method handles the process.
         *
         * In addition, it handles selector values from other fields and process the
         * css.
         *
         * @since 1.2.2
         * @access private
         *
         * @param array $selectors An array of selectors to process.
         *
         * @return array Processed selectors.
         */
        private function handle_selectors($selectors)
        {
        }
        /**
         * Start popover.
         *
         * Starts a group controls popover.
         *
         * @since 1.9.1
         * @access private
         * @param Controls_Stack $element Element.
         */
        private function start_popover(\Elementor\Controls_Stack $element)
        {
        }
    }
    /**
     * Elementor background control.
     *
     * A base control for creating background control. Displays input fields to define
     * the background color, background image, background gradient or background video.
     *
     * @since 1.2.2
     */
    class Group_Control_Background extends \Elementor\Group_Control_Base
    {
        /**
         * Fields.
         *
         * Holds all the background control fields.
         *
         * @since 1.2.2
         * @access protected
         * @static
         *
         * @var array Background control fields.
         */
        protected static $fields;
        /**
         * Background Types.
         *
         * Holds all the available background types.
         *
         * @since 1.2.2
         * @access private
         * @static
         *
         * @var array
         */
        private static $background_types;
        /**
         * Get background control type.
         *
         * Retrieve the control type, in this case `background`.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string Control type.
         */
        public static function get_type()
        {
        }
        /**
         * Get background control types.
         *
         * Retrieve available background types.
         *
         * @since 1.2.2
         * @access public
         * @static
         *
         * @return array Available background types.
         */
        public static function get_background_types()
        {
        }
        /**
         * Get Default background types.
         *
         * Retrieve background control initial types.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @return array Default background types.
         */
        private static function get_default_background_types()
        {
        }
        /**
         * Init fields.
         *
         * Initialize background control fields.
         *
         * @since 1.2.2
         * @access public
         *
         * @return array Control fields.
         */
        public function init_fields()
        {
        }
        /**
         * Get child default args.
         *
         * Retrieve the default arguments for all the child controls for a specific group
         * control.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Default arguments for all the child controls.
         */
        protected function get_child_default_args()
        {
        }
        /**
         * Filter fields.
         *
         * Filter which controls to display, using `include`, `exclude`, `condition`
         * and `of_type` arguments.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Control fields.
         */
        protected function filter_fields()
        {
        }
        /**
         * Prepare fields.
         *
         * Process background control fields before adding them to `add_control()`.
         *
         * @since 1.2.2
         * @access protected
         *
         * @param array $fields Background control fields.
         *
         * @return array Processed fields.
         */
        protected function prepare_fields($fields)
        {
        }
        /**
         * Get default options.
         *
         * Retrieve the default options of the background control. Used to return the
         * default options while initializing the background control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Default background control options.
         */
        protected function get_default_options()
        {
        }
    }
    /**
     * Elementor border control.
     *
     * A base control for creating border control. Displays input fields to define
     * border type, border width and border color.
     *
     * @since 1.0.0
     */
    class Group_Control_Border extends \Elementor\Group_Control_Base
    {
        /**
         * Fields.
         *
         * Holds all the border control fields.
         *
         * @since 1.0.0
         * @access protected
         * @static
         *
         * @var array Border control fields.
         */
        protected static $fields;
        /**
         * Get border control type.
         *
         * Retrieve the control type, in this case `border`.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string Control type.
         */
        public static function get_type()
        {
        }
        /**
         * Init fields.
         *
         * Initialize border control fields.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Control fields.
         */
        protected function init_fields()
        {
        }
        /**
         * Get default options.
         *
         * Retrieve the default options of the border control. Used to return the
         * default options while initializing the border control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Default border control options.
         */
        protected function get_default_options()
        {
        }
    }
    /**
     * Elementor box shadow control.
     *
     * A base control for creating box shadow control. Displays input fields to define
     * the box shadow including the horizontal shadow, vertical shadow, shadow blur,
     * shadow spread, shadow color and the position.
     *
     * @since 1.2.2
     */
    class Group_Control_Box_Shadow extends \Elementor\Group_Control_Base
    {
        /**
         * Fields.
         *
         * Holds all the box shadow control fields.
         *
         * @since 1.2.2
         * @access protected
         * @static
         *
         * @var array Box shadow control fields.
         */
        protected static $fields;
        /**
         * Get box shadow control type.
         *
         * Retrieve the control type, in this case `box-shadow`.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string Control type.
         */
        public static function get_type()
        {
        }
        /**
         * Init fields.
         *
         * Initialize box shadow control fields.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Control fields.
         */
        protected function init_fields()
        {
        }
        /**
         * Get default options.
         *
         * Retrieve the default options of the box shadow control. Used to return the
         * default options while initializing the box shadow control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Default box shadow control options.
         */
        protected function get_default_options()
        {
        }
    }
    /**
     * Elementor CSS Filter control.
     *
     * A base control for applying css filters. Displays sliders to define the
     * values of different CSS filters including blur, brightens, contrast,
     * saturation and hue.
     *
     * @since 2.1.0
     */
    class Group_Control_Css_Filter extends \Elementor\Group_Control_Base
    {
        /**
         * Prepare fields.
         *
         * Process css_filter control fields before adding them to `add_control()`.
         *
         * @since 2.1.0
         * @access protected
         *
         * @param array $fields CSS filter control fields.
         *
         * @return array Processed fields.
         */
        protected static $fields;
        /**
         * Get CSS filter control type.
         *
         * Retrieve the control type, in this case `css-filter`.
         *
         * @since 2.1.0
         * @access public
         * @static
         *
         * @return string Control type.
         */
        public static function get_type()
        {
        }
        /**
         * Init fields.
         *
         * Initialize CSS filter control fields.
         *
         * @since 2.1.0
         * @access protected
         *
         * @return array Control fields.
         */
        protected function init_fields()
        {
        }
        /**
         * Get default options.
         *
         * Retrieve the default options of the CSS filter control. Used to return the
         * default options while initializing the CSS filter control.
         *
         * @since 2.1.0
         * @access protected
         *
         * @return array Default CSS filter control options.
         */
        protected function get_default_options()
        {
        }
    }
    /**
     * Elementor image size control.
     *
     * A base control for creating image size control. Displays input fields to define
     * one of the default image sizes (thumbnail, medium, medium_large, large) or custom
     * image dimensions.
     *
     * @since 1.0.0
     */
    class Group_Control_Image_Size extends \Elementor\Group_Control_Base
    {
        /**
         * Fields.
         *
         * Holds all the image size control fields.
         *
         * @since 1.2.2
         * @access protected
         * @static
         *
         * @var array Image size control fields.
         */
        protected static $fields;
        /**
         * Get image size control type.
         *
         * Retrieve the control type, in this case `image-size`.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string Control type.
         */
        public static function get_type()
        {
        }
        /**
         * Get attachment image HTML.
         *
         * Retrieve the attachment image HTML code.
         *
         * Note that some widgets use the same key for the media control that allows
         * the image selection and for the image size control that allows the user
         * to select the image size, in this case the third parameter should be null
         * or the same as the second parameter. But when the widget uses different
         * keys for the media control and the image size control, when calling this
         * method you should pass the keys.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array  $settings       Control settings.
         * @param string $image_size_key Optional. Settings key for image size.
         *                               Default is `image`.
         * @param string $image_key      Optional. Settings key for image. Default
         *                               is null. If not defined uses image size key
         *                               as the image key.
         *
         * @return string Image HTML.
         */
        public static function get_attachment_image_html($settings, $image_size_key = 'image', $image_key = null)
        {
        }
        /**
         * Get all image sizes.
         *
         * Retrieve available image sizes with data like `width`, `height` and `crop`.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array An array of available image sizes.
         */
        public static function get_all_image_sizes()
        {
        }
        /**
         * Get attachment image src.
         *
         * Retrieve the attachment image source URL.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param string $attachment_id  The attachment ID.
         * @param string $image_size_key Settings key for image size.
         * @param array  $settings       Control settings.
         *
         * @return string Attachment image source URL.
         */
        public static function get_attachment_image_src($attachment_id, $image_size_key, array $settings)
        {
        }
        /**
         * Get child default arguments.
         *
         * Retrieve the default arguments for all the child controls for a specific group
         * control.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Default arguments for all the child controls.
         */
        protected function get_child_default_args()
        {
        }
        /**
         * Init fields.
         *
         * Initialize image size control fields.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Control fields.
         */
        protected function init_fields()
        {
        }
        /**
         * Prepare fields.
         *
         * Process image size control fields before adding them to `add_control()`.
         *
         * @since 1.2.2
         * @access protected
         *
         * @param array $fields Image size control fields.
         *
         * @return array Processed fields.
         */
        protected function prepare_fields($fields)
        {
        }
        /**
         * Get image sizes.
         *
         * Retrieve available image sizes after filtering `include` and `exclude` arguments.
         *
         * @since 2.0.0
         * @access private
         *
         * @return array Filtered image sizes.
         */
        private function get_image_sizes()
        {
        }
        /**
         * Get default options.
         *
         * Retrieve the default options of the image size control. Used to return the
         * default options while initializing the image size control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Default image size control options.
         */
        protected function get_default_options()
        {
        }
    }
    /**
     * Elementor text shadow control.
     *
     * A base control for creating text shadow control. Displays input fields to define
     * the text shadow including the horizontal shadow, vertical shadow, shadow blur and
     * shadow color.
     *
     * @since 1.6.0
     */
    class Group_Control_Text_Shadow extends \Elementor\Group_Control_Base
    {
        /**
         * Fields.
         *
         * Holds all the text shadow control fields.
         *
         * @since 1.6.0
         * @access protected
         * @static
         *
         * @var array Text shadow control fields.
         */
        protected static $fields;
        /**
         * Get text shadow control type.
         *
         * Retrieve the control type, in this case `text-shadow`.
         *
         * @since 1.6.0
         * @access public
         * @static
         *
         * @return string Control type.
         */
        public static function get_type()
        {
        }
        /**
         * Init fields.
         *
         * Initialize text shadow control fields.
         *
         * @since 1.6.0
         * @access protected
         *
         * @return array Control fields.
         */
        protected function init_fields()
        {
        }
        /**
         * Get default options.
         *
         * Retrieve the default options of the text shadow control. Used to return the
         * default options while initializing the text shadow control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Default text shadow control options.
         */
        protected function get_default_options()
        {
        }
    }
    /**
     * Elementor typography control.
     *
     * A base control for creating typography control. Displays input fields to define
     * the content typography including font size, font family, font weight, text
     * transform, font style, line height and letter spacing.
     *
     * @since 1.0.0
     */
    class Group_Control_Typography extends \Elementor\Group_Control_Base
    {
        /**
         * Fields.
         *
         * Holds all the typography control fields.
         *
         * @since 1.0.0
         * @access protected
         * @static
         *
         * @var array Typography control fields.
         */
        protected static $fields;
        /**
         * Scheme fields keys.
         *
         * Holds all the typography control scheme fields keys.
         * Default is an array containing `font_family` and `font_weight`.
         *
         * @since 1.0.0
         * @access private
         * @static
         *
         * @var array Typography control scheme fields keys.
         */
        private static $_scheme_fields_keys = ['font_family', 'font_weight'];
        /**
         * Get scheme fields keys.
         *
         * Retrieve all the available typography control scheme fields keys.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array Scheme fields keys.
         */
        public static function get_scheme_fields_keys()
        {
        }
        /**
         * Get typography control type.
         *
         * Retrieve the control type, in this case `typography`.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string Control type.
         */
        public static function get_type()
        {
        }
        /**
         * Init fields.
         *
         * Initialize typography control fields.
         *
         * @since 1.2.2
         * @access protected
         *
         * @return array Control fields.
         */
        protected function init_fields()
        {
        }
        /**
         * Prepare fields.
         *
         * Process typography control fields before adding them to `add_control()`.
         *
         * @since 1.2.3
         * @access protected
         *
         * @param array $fields Typography control fields.
         *
         * @return array Processed fields.
         */
        protected function prepare_fields($fields)
        {
        }
        /**
         * Add group arguments to field.
         *
         * Register field arguments to typography control.
         *
         * @since 1.2.2
         * @access protected
         *
         * @param string $control_id Typography control id.
         * @param array  $field_args Typography control field arguments.
         *
         * @return array Field arguments.
         */
        protected function add_group_args_to_field($control_id, $field_args)
        {
        }
        /**
         * Get default options.
         *
         * Retrieve the default options of the typography control. Used to return the
         * default options while initializing the typography control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Default typography control options.
         */
        protected function get_default_options()
        {
        }
    }
    /**
     * Elementor heading control.
     *
     * A base control for creating heading control. Displays a text heading between
     * controls in the panel.
     *
     * @since 1.0.0
     */
    class Control_Heading extends \Elementor\Base_UI_Control
    {
        /**
         * Get heading control type.
         *
         * Retrieve the control type, in this case `heading`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get heading control default settings.
         *
         * Retrieve the default settings of the heading control. Used to return the
         * default settings while initializing the heading control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render heading control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor hidden control.
     *
     * A base control for creating hidden control. Used to save additional data in
     * the database without a visual presentation in the panel.
     *
     * @since 1.0.0
     */
    class Control_Hidden extends \Elementor\Base_Data_Control
    {
        /**
         * Get hidden control type.
         *
         * Retrieve the control type, in this case `hidden`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render hidden control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor hover animation control.
     *
     * A base control for creating hover animation control. Displays a select box
     * with the available hover animation effects @see Control_Hover_Animation::get_animations()
     *
     * @since 1.0.0
     */
    class Control_Hover_Animation extends \Elementor\Base_Data_Control
    {
        /**
         * Animations.
         *
         * Holds all the available hover animation effects of the control.
         *
         * @access private
         * @static
         *
         * @var array
         */
        private static $_animations;
        /**
         * Get hover animation control type.
         *
         * Retrieve the control type, in this case `hover_animation`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get animations.
         *
         * Retrieve the available hover animation effects.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array Available hover animation.
         */
        public static function get_animations()
        {
        }
        /**
         * Render hover animation control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get hover animation control default settings.
         *
         * Retrieve the default settings of the hover animation control. Used to return
         * the default settings while initializing the hover animation control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor icon control.
     *
     * A base control for creating an icon control. Displays a font icon select box
     * field. The control accepts `include` or `exclude` arguments to set a partial
     * list of icons.
     *
     * @since 1.0.0
     */
    class Control_Icon extends \Elementor\Base_Data_Control
    {
        /**
         * Get icon control type.
         *
         * Retrieve the control type, in this case `icon`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get icons.
         *
         * Retrieve all the available icons.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array Available icons.
         */
        public static function get_icons()
        {
        }
        /**
         * Get icons control default settings.
         *
         * Retrieve the default settings of the icons control. Used to return the default
         * settings while initializing the icons control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render icons control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor Icons control.
     *
     * A base control for creating a Icons chooser control.
     * Used to select an Icon.
     *
     * Usage: @see https://developers.elementor.com/elementor-controls/icons-control
     *
     * @since 2.6.0
     */
    class Control_Icons extends \Elementor\Control_Base_Multiple
    {
        /**
         * Get media control type.
         *
         * Retrieve the control type, in this case `media`.
         *
         * @access public
         * @since 2.6.0
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get Icons control default values.
         *
         * Retrieve the default value of the Icons control. Used to return the default
         * values while initializing the Icons control.
         *
         * @access public
         * @since 2.6.0
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Render Icons control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 2.6.0
         * @access public
         */
        public function content_template()
        {
        }
        public function render_media_skin()
        {
        }
        public function render_inline_skin()
        {
        }
        /**
         * Get Icons control default settings.
         *
         * Retrieve the default settings of the Icons control. Used to return the default
         * settings while initializing the Icons control.
         *
         * @since 2.6.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        public function support_svg_import($mimes)
        {
        }
        public function on_import($settings)
        {
        }
    }
    /**
     * Elementor image dimensions control.
     *
     * A base control for creating image dimension control. Displays image width
     * input, image height input and an apply button.
     *
     * @since 1.0.0
     */
    class Control_Image_Dimensions extends \Elementor\Control_Base_Multiple
    {
        /**
         * Get image dimensions control type.
         *
         * Retrieve the control type, in this case `image_dimensions`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get image dimensions control default values.
         *
         * Retrieve the default value of the image dimensions control. Used to return the
         * default values while initializing the image dimensions control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get image dimensions control default settings.
         *
         * Retrieve the default settings of the image dimensions control. Used to return
         * the default settings while initializing the image dimensions control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render image dimensions control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Image editor support.
         *
         * Used to determine whether the editor supports a given image mime-type.
         *
         * @since 2.0.0
         * @access private
         *
         * @return bool Whether the editor supports the given mime-type.
         */
        private function is_image_editor_supports()
        {
        }
    }
    /**
     * Elementor media control.
     *
     * A base control for creating a media chooser control. Based on the WordPress
     * media library. Used to select an image from the WordPress media library.
     *
     * @since 1.0.0
     */
    class Control_Media extends \Elementor\Control_Base_Multiple
    {
        /**
         * Get media control type.
         *
         * Retrieve the control type, in this case `media`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get media control default values.
         *
         * Retrieve the default value of the media control. Used to return the default
         * values while initializing the media control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Import media images.
         *
         * Used to import media control files from external sites while importing
         * Elementor template JSON file, and replacing the old data.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $settings Control settings
         *
         * @return array Control settings.
         */
        public function on_import($settings)
        {
        }
        /**
         * Enqueue media control scripts and styles.
         *
         * Used to register and enqueue custom scripts and styles used by the media
         * control.
         *
         * @since 1.0.0
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * Render media control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get media control default settings.
         *
         * Retrieve the default settings of the media control. Used to return the default
         * settings while initializing the media control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Get media control image title.
         *
         * Retrieve the `title` of the image selected by the media control.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $attachment Media attachment.
         *
         * @return string Image title.
         */
        public static function get_image_title($attachment)
        {
        }
        /**
         * Get media control image alt.
         *
         * Retrieve the `alt` value of the image selected by the media control.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $instance Media attachment.
         *
         * @return string Image alt.
         */
        public static function get_image_alt($instance)
        {
        }
    }
    /**
     * Elementor number control.
     *
     * A base control for creating a number control. Displays a simple number input.
     *
     * @since 1.0.0
     */
    class Control_Number extends \Elementor\Base_Data_Control
    {
        /**
         * Get number control type.
         *
         * Retrieve the control type, in this case `number`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get number control default settings.
         *
         * Retrieve the default settings of the number control. Used to return the
         * default settings while initializing the number control.
         *
         * @since 1.5.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render number control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor popover toggle control.
     *
     * A base control for creating a popover toggle control. By default displays a toggle
     * button to open and close a popover.
     *
     * @since 1.9.0
     */
    class Control_Popover_Toggle extends \Elementor\Base_Data_Control
    {
        /**
         * Get popover toggle control type.
         *
         * Retrieve the control type, in this case `popover_toggle`.
         *
         * @since 1.9.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get popover toggle control default settings.
         *
         * Retrieve the default settings of the popover toggle control. Used to
         * return the default settings while initializing the popover toggle
         * control.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render popover toggle control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.9.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor raw HTML control.
     *
     * A base control for creating raw HTML control. Displays HTML markup between
     * controls in the panel.
     *
     * @since 1.0.0
     */
    class Control_Raw_Html extends \Elementor\Base_UI_Control
    {
        /**
         * Get raw html control type.
         *
         * Retrieve the control type, in this case `raw_html`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render raw html control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get raw html control default settings.
         *
         * Retrieve the default settings of the raw html control. Used to return the
         * default settings while initializing the raw html control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor repeater control.
     *
     * A base control for creating repeater control. Repeater control allows you to
     * build repeatable blocks of fields. You can create, for example, a set of
     * fields that will contain a title and a WYSIWYG text - the user will then be
     * able to add "rows", and each row will contain a title and a text. The data
     * can be wrapper in custom HTML tags, designed using CSS, and interact using JS
     * or external libraries.
     *
     * @since 1.0.0
     */
    class Control_Repeater extends \Elementor\Base_Data_Control
    {
        /**
         * Get repeater control type.
         *
         * Retrieve the control type, in this case `repeater`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get repeater control default value.
         *
         * Retrieve the default value of the data control. Used to return the default
         * values while initializing the repeater control.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get repeater control default settings.
         *
         * Retrieve the default settings of the repeater control. Used to return the
         * default settings while initializing the repeater control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Get repeater control value.
         *
         * Retrieve the value of the repeater control from a specific Controls_Stack.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $control  Control
         * @param array $settings Controls_Stack settings
         *
         * @return mixed Control values.
         */
        public function get_value($control, $settings)
        {
        }
        /**
         * Import repeater.
         *
         * Used as a wrapper method for inner controls while importing Elementor
         * template JSON file, and replacing the old data.
         *
         * @since 1.8.0
         * @access public
         *
         * @param array $settings     Control settings.
         * @param array $control_data Optional. Control data. Default is an empty array.
         *
         * @return array Control settings.
         */
        public function on_import($settings, $control_data = [])
        {
        }
        /**
         * Render repeater control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor section control.
     *
     * A base control for creating section control. Displays a header that
     * functions as a toggle to show or hide a set of controls.
     *
     * Note: Do not use it directly, instead use `$widget->start_controls_section()`
     * and `$widget->end_controls_section()` to wrap a set of controls.
     *
     * @since 1.0.0
     */
    class Control_Section extends \Elementor\Base_UI_Control
    {
        /**
         * Get section control type.
         *
         * Retrieve the control type, in this case `section`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render section control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get repeater control default settings.
         *
         * Retrieve the default settings of the repeater control. Used to return the
         * default settings while initializing the repeater control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor select control.
     *
     * A base control for creating select control. Displays a simple select box.
     * It accepts an array in which the `key` is the option value and the `value` is
     * the option name.
     *
     * @since 1.0.0
     */
    class Control_Select extends \Elementor\Base_Data_Control
    {
        /**
         * Get select control type.
         *
         * Retrieve the control type, in this case `select`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get select control default settings.
         *
         * Retrieve the default settings of the select control. Used to return the
         * default settings while initializing the select control.
         *
         * @since 2.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render select control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor select2 control.
     *
     * A base control for creating select2 control. Displays a select box control
     * based on select2 jQuery plugin @see https://select2.github.io/ .
     * It accepts an array in which the `key` is the value and the `value` is the
     * option name. Set `multiple` to `true` to allow multiple value selection.
     *
     * @since 1.0.0
     */
    class Control_Select2 extends \Elementor\Base_Data_Control
    {
        /**
         * Get select2 control type.
         *
         * Retrieve the control type, in this case `select2`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get select2 control default settings.
         *
         * Retrieve the default settings of the select2 control. Used to return the
         * default settings while initializing the select2 control.
         *
         * @since 1.8.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render select2 control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor slider control.
     *
     * A base control for creating slider control. Displays a draggable range slider.
     * The slider control can optionally have a number of unit types (`size_units`)
     * for the user to choose from. The control also accepts a range argument that
     * allows you to set the `min`, `max` and `step` values per unit type.
     *
     * @since 1.0.0
     */
    class Control_Slider extends \Elementor\Control_Base_Units
    {
        /**
         * Get slider control type.
         *
         * Retrieve the control type, in this case `slider`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get slider control default values.
         *
         * Retrieve the default value of the slider control. Used to return the default
         * values while initializing the slider control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get slider control default settings.
         *
         * Retrieve the default settings of the slider control. Used to return the
         * default settings while initializing the slider control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render slider control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor structure control.
     *
     * A base control for creating structure control. A private control for section
     * columns structure.
     *
     * @since 1.0.0
     */
    class Control_Structure extends \Elementor\Base_Data_Control
    {
        /**
         * Get structure control type.
         *
         * Retrieve the control type, in this case `structure`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render structure control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get structure control default settings.
         *
         * Retrieve the default settings of the structure control. Used to return the
         * default settings while initializing the structure control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor switcher control.
     *
     * A base control for creating switcher control. Displays an on/off switcher,
     * basically a fancy UI representation of a checkbox.
     *
     * @since 1.0.0
     */
    class Control_Switcher extends \Elementor\Base_Data_Control
    {
        /**
         * Get switcher control type.
         *
         * Retrieve the control type, in this case `switcher`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render switcher control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get switcher control default settings.
         *
         * Retrieve the default settings of the switcher control. Used to return the
         * default settings while initializing the switcher control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor tab control.
     *
     * A base control for creating tab control. Displays a tab header for a set of
     * controls.
     *
     * Note: Do not use it directly, instead use: `$widget->start_controls_tab()`
     * and in the end `$widget->end_controls_tab()`.
     *
     * @since 1.0.0
     */
    class Control_Tab extends \Elementor\Base_UI_Control
    {
        /**
         * Get tab control type.
         *
         * Retrieve the control type, in this case `tab`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render tab control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get tab control default settings.
         *
         * Retrieve the default settings of the tab control. Used to return the
         * default settings while initializing the tab control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor tabs control.
     *
     * A base control for creating tabs control. Displays a tabs header for `tab`
     * controls.
     *
     * Note: Do not use it directly, instead use: `$widget->start_controls_tabs()`
     * and in the end `$widget->end_controls_tabs()`.
     *
     * @since 1.0.0
     */
    class Control_Tabs extends \Elementor\Base_UI_Control
    {
        /**
         * Get tabs control type.
         *
         * Retrieve the control type, in this case `tabs`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render tabs control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get tabs control default settings.
         *
         * Retrieve the default settings of the tabs control. Used to return the
         * default settings while initializing the tabs control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor text shadow control.
     *
     * A base control for creating text shadows control. Displays input fields for
     * horizontal shadow, vertical shadow, shadow blur and shadow color.
     *
     * @since 1.6.0
     */
    class Control_Text_Shadow extends \Elementor\Control_Base_Multiple
    {
        /**
         * Get text shadow control type.
         *
         * Retrieve the control type, in this case `text_shadow`.
         *
         * @since 1.6.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get text shadow control default values.
         *
         * Retrieve the default value of the text shadow control. Used to return the
         * default values while initializing the text shadow control.
         *
         * @since 1.6.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get text shadow control sliders.
         *
         * Retrieve the sliders of the text shadow control. Sliders are used while
         * rendering the control output in the editor.
         *
         * @since 1.6.0
         * @access public
         *
         * @return array Control sliders.
         */
        public function get_sliders()
        {
        }
        /**
         * Render text shadow control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.6.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor text control.
     *
     * A base control for creating text control. Displays a simple text input.
     *
     * @since 1.0.0
     */
    class Control_Text extends \Elementor\Base_Data_Control
    {
        /**
         * Get text control type.
         *
         * Retrieve the control type, in this case `text`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render text control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Get text control default settings.
         *
         * Retrieve the default settings of the text control. Used to return the
         * default settings while initializing the text control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor textarea control.
     *
     * A base control for creating textarea control. Displays a classic textarea.
     *
     * @since 1.0.0
     */
    class Control_Textarea extends \Elementor\Base_Data_Control
    {
        /**
         * Get textarea control type.
         *
         * Retrieve the control type, in this case `textarea`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get textarea control default settings.
         *
         * Retrieve the default settings of the textarea control. Used to return the
         * default settings while initializing the textarea control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render textarea control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor URL control.
     *
     * A base control for creating url control. Displays a URL input with the
     * ability to set the target of the link to `_blank` to open in a new tab.
     *
     * @since 1.0.0
     */
    class Control_URL extends \Elementor\Control_Base_Multiple
    {
        /**
         * Get url control type.
         *
         * Retrieve the control type, in this case `url`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get url control default values.
         *
         * Retrieve the default value of the url control. Used to return the default
         * values while initializing the url control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Get url control default settings.
         *
         * Retrieve the default settings of the url control. Used to return the default
         * settings while initializing the url control.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render url control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor WordPress widget control.
     *
     * A base control for creating WordPress widget control. Displays native
     * WordPress widgets. This a private control for internal use.
     *
     * @since 1.0.0
     */
    class Control_WP_Widget extends \Elementor\Base_Data_Control
    {
        /**
         * Get WordPress widget control type.
         *
         * Retrieve the control type, in this case `wp_widget`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get WordPress widget control default values.
         *
         * Retrieve the default value of the WordPress widget control. Used to return the
         * default values while initializing the WordPress widget control.
         *
         * @since 1.4.3
         * @access public
         *
         * @return array Control default value.
         */
        public function get_default_value()
        {
        }
        /**
         * Render WordPress widget control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor WYSIWYG control.
     *
     * A base control for creating WYSIWYG control. Displays a WordPress WYSIWYG
     * (TinyMCE) editor.
     *
     * @since 1.0.0
     */
    class Control_Wysiwyg extends \Elementor\Base_Data_Control
    {
        /**
         * Get wysiwyg control type.
         *
         * Retrieve the control type, in this case `wysiwyg`.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Render wysiwyg control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
        /**
         * Retrieve textarea control default settings.
         *
         * Get the default settings of the textarea control. Used to return the
         * default settings while initializing the textarea control.
         *
         * @since 2.0.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
    }
    /**
     * Elementor database.
     *
     * Elementor database handler class is responsible for communicating with the
     * DB, save and retrieve Elementor data and meta data.
     *
     * @since 1.0.0
     */
    class DB
    {
        /**
         * Current DB version of the editor.
         */
        const DB_VERSION = '0.4';
        /**
         * Post publish status.
         *
         * @deprecated 3.1.0 Use `Document::STATUS_PUBLISH` instead
         */
        const STATUS_PUBLISH = \Elementor\Core\Base\Document::STATUS_PUBLISH;
        /**
         * Post draft status.
         *
         * @deprecated 3.1.0 Use `Document::STATUS_DRAFT` instead
         */
        const STATUS_DRAFT = \Elementor\Core\Base\Document::STATUS_DRAFT;
        /**
         * Post private status.
         *
         * @deprecated 3.1.0 Use `Document::STATUS_PRIVATE` instead
         */
        const STATUS_PRIVATE = \Elementor\Core\Base\Document::STATUS_PRIVATE;
        /**
         * Post autosave status.
         *
         * @deprecated 3.1.0 Use `Document::STATUS_AUTOSAVE` instead
         */
        const STATUS_AUTOSAVE = \Elementor\Core\Base\Document::STATUS_AUTOSAVE;
        /**
         * Post pending status.
         *
         * @deprecated 3.1.0 Use `Document::STATUS_PENDING` instead
         */
        const STATUS_PENDING = \Elementor\Core\Base\Document::STATUS_PENDING;
        /**
         * Switched post data.
         *
         * Holds the switched post data.
         *
         * @since 1.5.0
         * @access protected
         *
         * @var array Switched post data. Default is an empty array.
         */
        protected $switched_post_data = [];
        /**
         * Switched data.
         *
         * Holds the switched data.
         *
         * @since 2.0.0
         * @access protected
         *
         * @var array Switched data. Default is an empty array.
         */
        protected $switched_data = [];
        /**
         * Get builder.
         *
         * Retrieve editor data from the database.
         *
         * @since 1.0.0
         * @deprecated 3.1.0 Use `Plugin::$instance->documents->get( $post_id )->get_elements_raw_data( null, true )` OR `Plugin::$instance->documents->get_doc_or_auto_save( $post_id )->get_elements_raw_data( null, true )` instead
         * @access public
         *
         * @param int     $post_id           Post ID.
         * @param string  $status            Optional. Post status. Default is `publish`.
         *
         * @return array Editor data.
         */
        public function get_builder($post_id, $status = \Elementor\Core\Base\Document::STATUS_PUBLISH)
        {
        }
        /**
         * Get JSON meta.
         *
         * Retrieve post meta data, and return the JSON decoded data.
         *
         * @since 1.0.0
         * @access protected
         *
         * @param int    $post_id Post ID.
         * @param string $key     The meta key to retrieve.
         *
         * @return array Decoded JSON data from post meta.
         */
        protected function _get_json_meta($post_id, $key)
        {
        }
        /**
         * Is using Elementor.
         *
         * Set whether the page is using Elementor or not.
         *
         * @since 1.5.0
         * @deprecated 3.1.0 Use `Plugin::$instance->documents->get( $post_id )->set_is_build_with_elementor( $is_elementor )` instead
         * @access public
         *
         * @param int  $post_id      Post ID.
         * @param bool $is_elementor Optional. Whether the page is elementor page.
         *                           Default is true.
         */
        public function set_is_elementor_page($post_id, $is_elementor = true)
        {
        }
        /**
         * Render element plain content.
         *
         * When saving data in the editor, this method renders recursively the plain
         * content containing only the content and the HTML. No CSS data.
         *
         * @since 2.0.0
         * @access private
         *
         * @param array $element_data Element data.
         */
        private function render_element_plain_content($element_data)
        {
        }
        /**
         * Save plain text.
         *
         * Retrieves the raw content, removes all kind of unwanted HTML tags and saves
         * the content as the `post_content` field in the database.
         *
         * @since 1.9.0
         * @access public
         *
         * @param int $post_id Post ID.
         */
        public function save_plain_text($post_id)
        {
        }
        /**
         * Iterate data.
         *
         * Accept any type of Elementor data and a callback function. The callback
         * function runs recursively for each element and his child elements.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array    $data_container Any type of elementor data.
         * @param callable $callback       A function to iterate data by.
         * @param array    $args           Array of args pointers for passing parameters in & out of the callback
         *
         * @return mixed Iterated data.
         */
        public function iterate_data($data_container, $callback, $args = [])
        {
        }
        /**
         * Safely copy Elementor meta.
         *
         * Make sure the original page was built with Elementor and the post is not
         * auto-save. Only then copy elementor meta from one post to another using
         * `copy_elementor_meta()`.
         *
         * @since 1.9.2
         * @access public
         *
         * @param int $from_post_id Original post ID.
         * @param int $to_post_id   Target post ID.
         */
        public function safe_copy_elementor_meta($from_post_id, $to_post_id)
        {
        }
        /**
         * Copy Elementor meta.
         *
         * Duplicate the data from one post to another.
         *
         * Consider using `safe_copy_elementor_meta()` method instead.
         *
         * @since 1.1.0
         * @access public
         *
         * @param int $from_post_id Original post ID.
         * @param int $to_post_id   Target post ID.
         */
        public function copy_elementor_meta($from_post_id, $to_post_id)
        {
        }
        /**
         * Is built with Elementor.
         *
         * Check whether the post was built with Elementor.
         *
         * @since 1.0.10
         * @access public
         *
         * @param int $post_id Post ID.
         *
         * @return bool Whether the post was built with Elementor.
         */
        public function is_built_with_elementor($post_id)
        {
        }
        /**
         * Switch to post.
         *
         * Change the global WordPress post to the requested post.
         *
         * @since 1.5.0
         * @access public
         *
         * @param int $post_id Post ID to switch to.
         */
        public function switch_to_post($post_id)
        {
        }
        /**
         * Restore current post.
         *
         * Rollback to the previous global post, rolling back from `DB::switch_to_post()`.
         *
         * @since 1.5.0
         * @access public
         */
        public function restore_current_post()
        {
        }
        /**
         * Switch to query.
         *
         * Change the WordPress query to a new query with the requested
         * query variables.
         *
         * @since 2.0.0
         * @access public
         *
         * @param array $query_vars New query variables.
         * @param bool  $force_global_post
         */
        public function switch_to_query($query_vars, $force_global_post = false)
        {
        }
        /**
         * Restore current query.
         *
         * Rollback to the previous query, rolling back from `DB::switch_to_query()`.
         *
         * @since 2.0.0
         * @access public
         */
        public function restore_current_query()
        {
        }
        /**
         * Get plain text.
         *
         * Retrieve the post plain text.
         *
         * @since 1.9.0
         * @access public
         *
         * @param int $post_id Post ID.
         *
         * @return string Post plain text.
         */
        public function get_plain_text($post_id)
        {
        }
        /**
         * Get plain text from data.
         *
         * Retrieve the post plain text from any given Elementor data.
         *
         * @since 1.9.2
         * @access public
         *
         * @param array $data Post ID.
         *
         * @return string Post plain text.
         */
        public function get_plain_text_from_data($data)
        {
        }
    }
    /**
     * Elementor column element.
     *
     * Elementor column handler class is responsible for initializing the column
     * element.
     *
     * @since 1.0.0
     */
    class Element_Column extends \Elementor\Element_Base
    {
        /**
         * Get column name.
         *
         * Retrieve the column name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Column name.
         */
        public function get_name()
        {
        }
        /**
         * Get element type.
         *
         * Retrieve the element type, in this case `column`.
         *
         * @since 2.1.0
         * @access public
         * @static
         *
         * @return string The type.
         */
        public static function get_type()
        {
        }
        /**
         * Get column title.
         *
         * Retrieve the column title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Column title.
         */
        public function get_title()
        {
        }
        /**
         * Get column icon.
         *
         * Retrieve the column icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Column icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get initial config.
         *
         * Retrieve the current section initial configuration.
         *
         * Adds more configuration on top of the controls list, the tabs assigned to
         * the control, element name, type, icon and more. This method also adds
         * section presets.
         *
         * @since 2.9.0
         * @access protected
         *
         * @return array The initial config.
         */
        protected function get_initial_config()
        {
        }
        /**
         * Register column controls.
         *
         * Used to add new controls to the column element.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render column output in the editor.
         *
         * Used to generate the live preview, using a Backbone JavaScript template.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Before column rendering.
         *
         * Used to add stuff before the column element.
         *
         * @since 1.0.0
         * @access public
         */
        public function before_render()
        {
        }
        /**
         * After column rendering.
         *
         * Used to add stuff after the column element.
         *
         * @since 1.0.0
         * @access public
         */
        public function after_render()
        {
        }
        /**
         * Add column render attributes.
         *
         * Used to add attributes to the current column wrapper HTML tag.
         *
         * @since 1.3.0
         * @access protected
         */
        protected function add_render_attributes()
        {
        }
        /**
         * Get default child type.
         *
         * Retrieve the column child type based on element data.
         *
         * @since 1.0.0
         * @access protected
         *
         * @param array $element_data Element ID.
         *
         * @return Element_Base Column default child type.
         */
        protected function _get_default_child_type(array $element_data)
        {
        }
        /**
         * Get HTML tag.
         *
         * Retrieve the column element HTML tag.
         *
         * @since 1.5.3
         * @access private
         *
         * @return string Column HTML tag.
         */
        private function get_html_tag()
        {
        }
    }
    /**
     * Elementor repeater element.
     *
     * Elementor repeater handler class is responsible for initializing the repeater.
     *
     * @since 1.0.0
     */
    class Repeater extends \Elementor\Element_Base
    {
        /**
         * Repeater counter.
         *
         * Holds the Repeater counter data. Default is `0`.
         *
         * @since 1.0.0
         * @access private
         * @static
         *
         * @var int Repeater counter.
         */
        private static $counter = 0;
        /**
         * Repeater constructor.
         *
         * Initializing Elementor repeater element.
         *
         * @since 1.0.7
         * @access public
         *
         * @param array      $data Optional. Element data. Default is an empty array.
         * @param array|null $args Optional. Element default arguments. Default is null.
         *
         */
        public function __construct(array $data = [], array $args = null)
        {
        }
        /**
         * Get repeater name.
         *
         * Retrieve the repeater name.
         *
         * @since 1.0.7
         * @access public
         *
         * @return string Repeater name.
         */
        public function get_name()
        {
        }
        /**
         * Get repeater type.
         *
         * Retrieve the repeater type.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string Repeater type.
         */
        public static function get_type()
        {
        }
        /**
         * Add new repeater control to stack.
         *
         * Register a repeater control to allow the user to set/update data.
         *
         * This method should be used inside `register_controls()`.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $id      Repeater control ID.
         * @param array  $args    Repeater control arguments.
         * @param array  $options Optional. Repeater control options. Default is an
         *                        empty array.
         *
         * @return bool True if repeater control added, False otherwise.
         */
        public function add_control($id, array $args, $options = [])
        {
        }
        /**
         * Get repeater fields.
         *
         * Retrieve the fields from the current repeater control.
         *
         * @since 1.5.0
         * @deprecated 2.1.0 Use `Repeater::get_controls()` instead.
         * @access public
         *
         * @return array Repeater fields.
         */
        public function get_fields()
        {
        }
        /**
         * Get default child type.
         *
         * Retrieve the repeater child type based on element data.
         *
         * Note that repeater does not support children, therefore it returns false.
         *
         * @since 1.0.0
         * @access protected
         *
         * @param array $element_data Element ID.
         *
         * @return false Repeater default child type or False if type not found.
         */
        protected function _get_default_child_type(array $element_data)
        {
        }
        protected function handle_control_position(array $args, $control_id, $overwrite)
        {
        }
    }
    /**
     * Elementor section element.
     *
     * Elementor section handler class is responsible for initializing the section
     * element.
     *
     * @since 1.0.0
     */
    class Element_Section extends \Elementor\Element_Base
    {
        /**
         * Section predefined columns presets.
         *
         * Holds the predefined columns width for each columns count available by
         * default by Elementor. Default is an empty array.
         *
         * Note that when the user creates a section he can define custom sizes for
         * the columns. But Elementor sets default values for predefined columns.
         *
         * For example two columns 50% width each one, or three columns 33.33% each
         * one. This property hold the data for those preset values.
         *
         * @since 1.0.0
         * @access private
         * @static
         *
         * @var array Section presets.
         */
        private static $presets = [];
        /**
         * Get element type.
         *
         * Retrieve the element type, in this case `section`.
         *
         * @since 2.1.0
         * @access public
         * @static
         *
         * @return string The type.
         */
        public static function get_type()
        {
        }
        /**
         * Get section name.
         *
         * Retrieve the section name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Section name.
         */
        public function get_name()
        {
        }
        /**
         * Get section title.
         *
         * Retrieve the section title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Section title.
         */
        public function get_title()
        {
        }
        /**
         * Get section icon.
         *
         * Retrieve the section icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Section icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get presets.
         *
         * Retrieve a specific preset columns for a given columns count, or a list
         * of all the preset if no parameters passed.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param int $columns_count Optional. Columns count. Default is null.
         * @param int $preset_index  Optional. Preset index. Default is null.
         *
         * @return array Section presets.
         */
        public static function get_presets($columns_count = null, $preset_index = null)
        {
        }
        /**
         * Initialize presets.
         *
         * Initializing the section presets and set the number of columns the
         * section can have by default. For example a column can have two columns
         * 50% width each one, or three columns 33.33% each one.
         *
         * Note that Elementor sections have default section presets but the user
         * can set custom number of columns and define custom sizes for each column.
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function init_presets()
        {
        }
        /**
         * Get initial config.
         *
         * Retrieve the current section initial configuration.
         *
         * Adds more configuration on top of the controls list, the tabs assigned to
         * the control, element name, type, icon and more. This method also adds
         * section presets.
         *
         * @since 2.9.0
         * @access protected
         *
         * @return array The initial config.
         */
        protected function get_initial_config()
        {
        }
        /**
         * Register section controls.
         *
         * Used to add new controls to the section element.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render section output in the editor.
         *
         * Used to generate the live preview, using a Backbone JavaScript template.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Before section rendering.
         *
         * Used to add stuff before the section element.
         *
         * @since 1.0.0
         * @access public
         */
        public function before_render()
        {
        }
        /**
         * After section rendering.
         *
         * Used to add stuff after the section element.
         *
         * @since 1.0.0
         * @access public
         */
        public function after_render()
        {
        }
        /**
         * Add section render attributes.
         *
         * Used to add attributes to the current section wrapper HTML tag.
         *
         * @since 1.3.0
         * @access protected
         */
        protected function add_render_attributes()
        {
        }
        /**
         * Get default child type.
         *
         * Retrieve the section child type based on element data.
         *
         * @since 1.0.0
         * @access protected
         *
         * @param array $element_data Element ID.
         *
         * @return Element_Base Section default child type.
         */
        protected function _get_default_child_type(array $element_data)
        {
        }
        /**
         * Get HTML tag.
         *
         * Retrieve the section element HTML tag.
         *
         * @since 1.5.3
         * @access private
         *
         * @return string Section HTML tag.
         */
        private function get_html_tag()
        {
        }
        /**
         * Print section shape divider.
         *
         * Used to generate the shape dividers HTML.
         *
         * @since 1.3.0
         * @access private
         *
         * @param string $side Shape divider side, used to set the shape key.
         */
        private function print_shape_divider($side)
        {
        }
    }
    /**
     * Elementor embed.
     *
     * Elementor embed handler class is responsible for Elementor embed functionality.
     * The class holds the supported providers with their embed patters, and handles
     * their custom properties to create custom HTML with the embeded content.
     *
     * @since 1.5.0
     */
    class Embed
    {
        /**
         * Provider match masks.
         *
         * Holds a list of supported providers with their URL structure in a regex format.
         *
         * @since 1.5.0
         * @access private
         * @static
         *
         * @var array Provider URL structure regex.
         */
        private static $provider_match_masks = ['youtube' => '/^.*(?:youtu\\.be\\/|youtube(?:-nocookie)?\\.com\\/(?:(?:watch)?\\?(?:.*&)?vi?=|(?:embed|v|vi|user)\\/))([^\\?&\\"\'>]+)/', 'vimeo' => '/^.*vimeo\\.com\\/(?:[a-z]*\\/)*([‌​0-9]{6,11})[?]?.*/', 'dailymotion' => '/^.*dailymotion.com\\/(?:video|hub)\\/([^_]+)[^#]*(#video=([^_&]+))?/'];
        /**
         * Embed patterns.
         *
         * Holds a list of supported providers with their embed patters.
         *
         * @since 1.5.0
         * @access private
         * @static
         *
         * @var array Embed patters.
         */
        private static $embed_patterns = ['youtube' => 'https://www.youtube{NO_COOKIE}.com/embed/{VIDEO_ID}?feature=oembed', 'vimeo' => 'https://player.vimeo.com/video/{VIDEO_ID}#t={TIME}', 'dailymotion' => 'https://dailymotion.com/embed/video/{VIDEO_ID}'];
        /**
         * Get video properties.
         *
         * Retrieve the video properties for a given video URL.
         *
         * @since 1.5.0
         * @access public
         * @static
         *
         * @param string $video_url Video URL.
         *
         * @return null|array The video properties, or null.
         */
        public static function get_video_properties($video_url)
        {
        }
        /**
         * Get embed URL.
         *
         * Retrieve the embed URL for a given video.
         *
         * @since 1.5.0
         * @access public
         * @static
         *
         * @param string $video_url        Video URL.
         * @param array  $embed_url_params Optional. Embed parameters. Default is an
         *                                 empty array.
         * @param array  $options          Optional. Embed options. Default is an
         *                                 empty array.
         *
         * @return null|array The video properties, or null.
         */
        public static function get_embed_url($video_url, array $embed_url_params = [], array $options = [])
        {
        }
        /**
         * Get embed HTML.
         *
         * Retrieve the final HTML of the embedded URL.
         *
         * @since 1.5.0
         * @access public
         * @static
         *
         * @param string $video_url        Video URL.
         * @param array  $embed_url_params Optional. Embed parameters. Default is an
         *                                 empty array.
         * @param array  $options          Optional. Embed options. Default is an
         *                                 empty array.
         * @param array  $frame_attributes Optional. IFrame attributes. Default is an
         *                                 empty array.
         *
         * @return string The embed HTML.
         */
        public static function get_embed_html($video_url, array $embed_url_params = [], array $options = [], array $frame_attributes = [])
        {
        }
        /**
         * Get oembed data from the cache.
         * if not exists in the cache it will fetch from provider and then save to the cache.
         *
         * @param $oembed_url
         * @param $cached_post_id
         *
         * @return array|null
         */
        public static function get_oembed_data($oembed_url, $cached_post_id)
        {
        }
        /**
         * Fetch oembed data from oembed provider.
         *
         * @param $oembed_url
         *
         * @return array|null
         */
        public static function fetch_oembed_data($oembed_url)
        {
        }
        /**
         * @param $oembed_url
         * @param null|string|int $cached_post_id
         *
         * @return string|null
         */
        public static function get_embed_thumbnail_html($oembed_url, $cached_post_id = null)
        {
        }
    }
    /**
     * Elementor fonts.
     *
     * Elementor fonts handler class is responsible for registering the supported
     * fonts used by Elementor.
     *
     * @since 1.0.0
     */
    class Fonts
    {
        /**
         * The system font name.
         */
        const SYSTEM = 'system';
        /**
         * The google font name.
         */
        const GOOGLE = 'googlefonts';
        /**
         * The google early access font name.
         */
        const EARLYACCESS = 'earlyaccess';
        /**
         * The local font name.
         */
        const LOCAL = 'local';
        private static $fonts;
        /**
         * Font groups.
         *
         * Used to hold font types/groups.
         *
         * @since 1.9.4
         * @access private
         * @static
         *
         * @var null|array
         */
        private static $font_groups;
        /**
         * Get font Groups.
         *
         * Retrieve the list of font groups.
         *
         * @since 1.9.4
         * @access public
         * @static
         *
         * @return array Supported font groups/types.
         */
        public static function get_font_groups()
        {
        }
        /**
         * Get fonts.
         *
         * Retrieve the list of supported fonts.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array Supported fonts.
         */
        public static function get_fonts()
        {
        }
        /**
         * Get Elementor native fonts.
         *
         * Retrieve the list of supported fonts.
         *
         * @since 1.9.4
         * @access private
         * @static
         *
         * @return array Supported fonts.
         */
        private static function get_native_fonts()
        {
        }
        /**
         * Get font type.
         *
         * Retrieve the font type for a given font.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param string $name Font name.
         *
         * @return string|false Font type, or false if font doesn't exist.
         */
        public static function get_font_type($name)
        {
        }
        /**
         * Get fonts by group.
         *
         * Retrieve all the fonts belong to specific group.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $groups Optional. Font group. Default is an empty array.
         *
         * @return array Font type, or false if font doesn't exist.
         */
        public static function get_fonts_by_groups($groups = [])
        {
        }
    }
    /**
     * Elementor frontend.
     *
     * Elementor frontend handler class is responsible for initializing Elementor in
     * the frontend.
     *
     * @since 1.0.0
     */
    class Frontend extends \Elementor\Core\Base\App
    {
        /**
         * The priority of the content filter.
         */
        const THE_CONTENT_FILTER_PRIORITY = 9;
        /**
         * Post ID.
         *
         * Holds the ID of the current post.
         *
         * @access private
         *
         * @var int Post ID.
         */
        private $post_id;
        /**
         * Fonts to enqueue
         *
         * Holds the list of fonts that are being used in the current page.
         *
         * @since 1.9.4
         * @access public
         *
         * @var array Used fonts. Default is an empty array.
         */
        public $fonts_to_enqueue = [];
        /**
         * Holds the class that respond to manage the render mode.
         *
         * @var Render_Mode_Manager
         */
        public $render_mode_manager;
        /**
         * Registered fonts.
         *
         * Holds the list of enqueued fonts in the current page.
         *
         * @since 1.0.0
         * @access private
         *
         * @var array Registered fonts. Default is an empty array.
         */
        private $registered_fonts = [];
        /**
         * Icon Fonts to enqueue
         *
         * Holds the list of Icon fonts that are being used in the current page.
         *
         * @since 2.4.0
         * @access private
         *
         * @var array Used icon fonts. Default is an empty array.
         */
        private $icon_fonts_to_enqueue = [];
        /**
         * Enqueue Icon Fonts
         *
         * Holds the list of Icon fonts already enqueued  in the current page.
         *
         * @since 2.4.0
         * @access private
         *
         * @var array enqueued icon fonts. Default is an empty array.
         */
        private $enqueued_icon_fonts = [];
        /**
         * Whether the page is using Elementor.
         *
         * Used to determine whether the current page is using Elementor.
         *
         * @since 1.0.0
         * @access private
         *
         * @var bool Whether Elementor is being used. Default is false.
         */
        private $_has_elementor_in_page = false;
        /**
         * Whether the excerpt is being called.
         *
         * Used to determine whether the call to `the_content()` came from `get_the_excerpt()`.
         *
         * @since 1.0.0
         * @access private
         *
         * @var bool Whether the excerpt is being used. Default is false.
         */
        private $_is_excerpt = false;
        /**
         * Filters removed from the content.
         *
         * Hold the list of filters removed from `the_content()`. Used to hold the filters that
         * conflicted with Elementor while Elementor process the content.
         *
         * @since 1.0.0
         * @access private
         *
         * @var array Filters removed from the content. Default is an empty array.
         */
        private $content_removed_filters = [];
        /**
         * @var string[]
         */
        private $body_classes = ['elementor-default'];
        /**
         * Front End constructor.
         *
         * Initializing Elementor front end. Make sure we are not in admin, not and
         * redirect from old URL structure of Elementor editor.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Get module name.
         *
         * Retrieve the module name.
         *
         * @since 2.3.0
         * @access public
         *
         * @return string Module name.
         */
        public function get_name()
        {
        }
        /**
         * Init render mode manager.
         */
        public function init_render_mode()
        {
        }
        /**
         * Init.
         *
         * Initialize Elementor front end. Hooks the needed actions to run Elementor
         * in the front end, including script and style registration.
         *
         * Fired by `template_redirect` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function init()
        {
        }
        /**
         * @since 2.0.12
         * @access public
         * @param string|array $class
         */
        public function add_body_class($class)
        {
        }
        /**
         * Add Theme Color Meta Tag
         *
         * @since 3.0.0
         * @access public
         */
        public function add_theme_color_meta_tag()
        {
        }
        /**
         * Body tag classes.
         *
         * Add new elementor classes to the body tag.
         *
         * Fired by `body_class` filter.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $classes Optional. One or more classes to add to the body tag class list.
         *                       Default is an empty array.
         *
         * @return array Body tag classes.
         */
        public function body_class($classes = [])
        {
        }
        /**
         * Add content filter.
         *
         * Remove plain content and render the content generated by Elementor.
         *
         * @since 1.8.0
         * @access public
         */
        public function add_content_filter()
        {
        }
        /**
         * Remove content filter.
         *
         * When the Elementor generated content rendered, we remove the filter to prevent multiple
         * accuracies. This way we make sure Elementor renders the content only once.
         *
         * @since 1.8.0
         * @access public
         */
        public function remove_content_filter()
        {
        }
        /**
         * Registers scripts.
         *
         * Registers all the frontend scripts.
         *
         * Fired by `wp_enqueue_scripts` action.
         *
         * @since 1.2.1
         * @access public
         */
        public function register_scripts()
        {
        }
        /**
         * Registers styles.
         *
         * Registers all the frontend styles.
         *
         * Fired by `wp_enqueue_scripts` action.
         *
         * @since 1.2.0
         * @access public
         */
        public function register_styles()
        {
        }
        /**
         * Enqueue scripts.
         *
         * Enqueue all the frontend scripts.
         *
         * @since 1.0.0
         * @access public
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Enqueue styles.
         *
         * Enqueue all the frontend styles.
         *
         * Fired by `wp_enqueue_scripts` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function enqueue_styles()
        {
        }
        /**
         * Elementor footer scripts and styles.
         *
         * Handle styles and scripts that are not printed in the header.
         *
         * Fired by `wp_footer` action.
         *
         * @since 1.0.11
         * @access public
         */
        public function wp_footer()
        {
        }
        /**
         * Print fonts links.
         *
         * Enqueue all the frontend fonts by url.
         *
         * Fired by `wp_head` action.
         *
         * @since 1.9.4
         * @access public
         */
        public function print_fonts_links()
        {
        }
        private function maybe_enqueue_icon_font($icon_font_type)
        {
        }
        private function enqueue_icon_fonts()
        {
        }
        /**
         * Print Google fonts.
         *
         * Enqueue all the frontend Google fonts.
         *
         * Fired by `wp_head` action.
         *
         * @since 1.0.0
         * @access private
         *
         * @param array $google_fonts Optional. Google fonts to print in the frontend.
         *                            Default is an empty array.
         */
        private function enqueue_google_fonts($google_fonts = [])
        {
        }
        /**
         * Enqueue fonts.
         *
         * Enqueue all the frontend fonts.
         *
         * @since 1.2.0
         * @access public
         *
         * @param array $font Fonts to enqueue in the frontend.
         */
        public function enqueue_font($font)
        {
        }
        /**
         * Parse global CSS.
         *
         * Enqueue the global CSS file.
         *
         * @since 1.2.0
         * @access protected
         */
        protected function parse_global_css_code()
        {
        }
        /**
         * Apply builder in content.
         *
         * Used to apply the Elementor page editor on the post content.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $content The post content.
         *
         * @return string The post content.
         */
        public function apply_builder_in_content($content)
        {
        }
        /**
         * Retrieve builder content.
         *
         * Used to render and return the post content with all the Elementor elements.
         *
         * Note that this method is an internal method, please use `get_builder_content_for_display()`.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int  $post_id  The post ID.
         * @param bool $with_css Optional. Whether to retrieve the content with CSS
         *                       or not. Default is false.
         *
         * @return string The post content.
         */
        public function get_builder_content($post_id, $with_css = false)
        {
        }
        /**
         * Retrieve builder content for display.
         *
         * Used to render and return the post content with all the Elementor elements.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $post_id The post ID.
         *
         * @param bool $with_css Optional. Whether to retrieve the content with CSS
         *                       or not. Default is false.
         *
         * @return string The post content.
         */
        public function get_builder_content_for_display($post_id, $with_css = false)
        {
        }
        /**
         * Start excerpt flag.
         *
         * Flags when `the_excerpt` is called. Used to avoid enqueueing CSS in the excerpt.
         *
         * @since 1.4.3
         * @access public
         *
         * @param string $excerpt The post excerpt.
         *
         * @return string The post excerpt.
         */
        public function start_excerpt_flag($excerpt)
        {
        }
        /**
         * End excerpt flag.
         *
         * Flags when `the_excerpt` call ended.
         *
         * @since 1.4.3
         * @access public
         *
         * @param string $excerpt The post excerpt.
         *
         * @return string The post excerpt.
         */
        public function end_excerpt_flag($excerpt)
        {
        }
        /**
         * Remove content filters.
         *
         * Remove WordPress default filters that conflicted with Elementor.
         *
         * @since 1.5.0
         * @access public
         */
        public function remove_content_filters()
        {
        }
        /**
         * Has Elementor In Page
         *
         * Determine whether the current page is using Elementor.
         *
         * @since 2.0.9
         *
         * @access public
         * @return bool
         */
        public function has_elementor_in_page()
        {
        }
        public function create_action_hash($action, array $settings = [])
        {
        }
        /**
         * Is the current render mode is static.
         *
         * @return bool
         */
        public function is_static_render_mode()
        {
        }
        /**
         * Get Init Settings
         *
         * Used to define the default/initial settings of the object. Inheriting classes may implement this method to define
         * their own default/initial settings.
         *
         * @since 2.3.0
         *
         * @access protected
         * @return array
         */
        protected function get_init_settings()
        {
        }
        /**
         * Restore content filters.
         *
         * Restore removed WordPress filters that conflicted with Elementor.
         *
         * @since 1.5.0
         * @access private
         */
        private function restore_content_filters()
        {
        }
        /**
         * Process More Tag
         *
         * Respect the native WP (<!--more-->) tag
         *
         * @access private
         * @since 2.0.4
         *
         * @param $content
         *
         * @return string
         */
        private function process_more_tag($content)
        {
        }
        private function is_improved_assets_loading()
        {
        }
        private function get_elementor_frontend_dependencies()
        {
        }
    }
    /**
     * Elementor heartbeat.
     *
     * Elementor heartbeat handler class is responsible for initializing Elementor
     * heartbeat. The class communicates with WordPress Heartbeat API while working
     * with Elementor.
     *
     * @since 1.0.0
     */
    class Heartbeat
    {
        /**
         * Heartbeat received.
         *
         * Locks the Heartbeat response received when editing with Elementor.
         *
         * Fired by `heartbeat_received` filter.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $response The Heartbeat response.
         * @param array $data     The `$_POST` data sent.
         *
         * @return array Heartbeat response received.
         */
        public function heartbeat_received($response, $data)
        {
        }
        /**
         * Refresh nonces.
         *
         * Filter the nonces to send to the editor when editing with Elementor. Used
         * to refresh the nonce when the nonce expires while editing. This way the
         * user doesn't need to log-in again as Elementor fetches the new nonce from
         * the server using ajax.
         *
         * Fired by `wp_refresh_nonces` filter.
         *
         * @since 1.8.0
         * @access public
         *
         * @param array $response The no-priv Heartbeat response object or array.
         * @param array $data     The `$_POST` data sent.
         *
         * @return array Refreshed nonces.
         */
        public function refresh_nonces($response, $data)
        {
        }
        /**
         * Heartbeat constructor.
         *
         * Initializing Elementor heartbeat.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
    }
}
namespace {
    class BFI_Class_Factory
    {
        public static $versions = array();
        public static $latestClass = array();
        public static function addClassVersion($baseClassName, $className, $version)
        {
        }
        public static function getNewestVersion($baseClassName)
        {
        }
        public static function versionCompare($a, $b)
        {
        }
    }
    class BFI_Image_Editor_Imagick_1_3 extends \WP_Image_Editor_Imagick
    {
        /** Changes the opacity of the image
         *
         * @supports 3.5.1
         * @access   public
         *
         * @param float $opacity (0.0-1.0)
         *
         * @return boolean|WP_Error
         */
        public function opacity($opacity)
        {
        }
        /** Tints the image a different color
         *
         * @supports 3.5.1
         * @access   public
         *
         * @param string hex color e.g. #ff00ff
         *
         * @return boolean|WP_Error
         */
        public function colorize($hexColor)
        {
        }
        /** Makes the image grayscale
         *
         * @supports 3.5.1
         * @access   public
         *
         * @return boolean|WP_Error
         */
        public function grayscale()
        {
        }
        /** Negates the image
         *
         * @supports 3.5.1
         * @access   public
         *
         * @return boolean|WP_Error
         */
        public function negate()
        {
        }
    }
    class BFI_Image_Editor_GD_1_3 extends \WP_Image_Editor_GD
    {
        /** Rotates current image counter-clockwise by $angle.
         * Ported from image-edit.php
         * Added presevation of alpha channels
         *
         * @since  3.5.0
         * @access public
         *
         * @param float $angle
         *
         * @return boolean|WP_Error
         */
        public function rotate($angle)
        {
        }
        /** Changes the opacity of the image
         *
         * @supports 3.5.1
         * @access   public
         *
         * @param float $opacity (0.0-1.0)
         *
         * @return boolean|WP_Error
         */
        public function opacity($opacity)
        {
        }
        // from: http://php.net/manual/en/function.imagefilter.php
        // params: image resource id, opacity (eg. 0.0-1.0)
        protected function _opacity($image, $opacity)
        {
        }
        /** Tints the image a different color
         *
         * @supports 3.5.1
         * @access   public
         *
         * @param string hex color e.g. #ff00ff
         *
         * @return boolean|WP_Error
         */
        public function colorize($hexColor)
        {
        }
        /** Makes the image grayscale
         *
         * @supports 3.5.1
         * @access   public
         *
         * @return boolean|WP_Error
         */
        public function grayscale()
        {
        }
        /** Negates the image
         *
         * @supports 3.5.1
         * @access   public
         *
         * @return boolean|WP_Error
         */
        public function negate()
        {
        }
    }
    class BFI_Thumb_1_3
    {
        /** Uses WP's Image Editor Class to resize and filter images
         * Inspired by: https://github.com/sy4mil/Aqua-Resizer/blob/master/aq_resizer.php
         *
         * @param $url    string the local image URL to manipulate
         * @param $params array the options to perform on the image. Keys and values supported:
         *                'width' int pixels
         *                'height' int pixels
         *                'opacity' int 0-100
         *                'color' string hex-color #000000-#ffffff
         *                'grayscale' bool
         *                'crop' bool
         *                'negate' bool
         *                'crop_only' bool
         *                'crop_x' bool string
         *                'crop_y' bool string
         *                'crop_width' bool string
         *                'crop_height' bool string
         *                'quality' int 1-100
         * @param $single boolean, if false then an array of data will be returned
         *
         * @return string|array
         */
        public static function thumb($url, $params = array(), $single = \true)
        {
        }
        /** Shortens a number into a base 36 string
         *
         * @param $number   string a string of numbers to convert
         * @param $fromBase starting base
         * @param $toBase   base to convert the number to
         *
         * @return string base converted characters
         */
        protected static function base_convert_arbitrary($number, $fromBase, $toBase)
        {
        }
    }
    abstract class WP_Async_Request extends \Elementor\Core\Base\BackgroundProcess\WP_Async_Request
    {
    }
    abstract class WP_Background_Process extends \Elementor\Core\Base\BackgroundProcess\WP_Background_Process
    {
    }
}
namespace Elementor {
    /**
     * Elementor maintenance mode.
     *
     * Elementor maintenance mode handler class is responsible for the Elementor
     * "Maintenance Mode" and the "Coming Soon" features.
     *
     * @since 1.4.0
     */
    class Maintenance_Mode
    {
        /**
         * The options prefix.
         */
        const OPTION_PREFIX = 'elementor_maintenance_mode_';
        /**
         * The maintenance mode.
         */
        const MODE_MAINTENANCE = 'maintenance';
        /**
         * The coming soon mode.
         */
        const MODE_COMING_SOON = 'coming_soon';
        /**
         * Get elementor option.
         *
         * Retrieve elementor option from the database.
         *
         * @since 1.4.0
         * @access public
         * @static
         *
         * @param string $option  Option name. Expected to not be SQL-escaped.
         * @param mixed  $default Optional. Default value to return if the option
         *                        does not exist. Default is false.
         *
         * @return bool False if value was not updated and true if value was updated.
         */
        public static function get($option, $default = false)
        {
        }
        /**
         * Set elementor option.
         *
         * Update elementor option in the database.
         *
         * @since 1.4.0
         * @access public
         * @static
         *
         * @param string $option Option name. Expected to not be SQL-escaped.
         * @param mixed  $value  Option value. Must be serializable if non-scalar.
         *                       Expected to not be SQL-escaped.
         *
         * @return bool False if value was not updated and true if value was updated.
         */
        public static function set($option, $value)
        {
        }
        /**
         * Body class.
         *
         * Add "Maintenance Mode" CSS classes to the body tag.
         *
         * Fired by `body_class` filter.
         *
         * @since 1.4.0
         * @access public
         *
         * @param array $classes An array of body classes.
         *
         * @return array An array of body classes.
         */
        public function body_class($classes)
        {
        }
        /**
         * Template redirect.
         *
         * Redirect to the "Maintenance Mode" template.
         *
         * Fired by `template_redirect` action.
         *
         * @since 1.4.0
         * @access public
         */
        public function template_redirect()
        {
        }
        /**
         * Register settings fields.
         *
         * Adds new "Maintenance Mode" settings fields to Elementor admin page.
         *
         * The method need to receive the an instance of the Tools settings page
         * to add the new maintenance mode functionality.
         *
         * Fired by `elementor/admin/after_create_settings/{$page_id}` action.
         *
         * @since 1.4.0
         * @access public
         *
         * @param Tools $tools An instance of the Tools settings page.
         */
        public function register_settings_fields(\Elementor\Tools $tools)
        {
        }
        /**
         * Add menu in admin bar.
         *
         * Adds "Maintenance Mode" items to the WordPress admin bar.
         *
         * Fired by `admin_bar_menu` filter.
         *
         * @since 1.4.0
         * @access public
         *
         * @param \WP_Admin_Bar $wp_admin_bar WP_Admin_Bar instance, passed by reference.
         */
        public function add_menu_in_admin_bar(\WP_Admin_Bar $wp_admin_bar)
        {
        }
        /**
         * Print style.
         *
         * Adds custom CSS to the HEAD html tag. The CSS that emphasise the maintenance
         * mode with red colors.
         *
         * Fired by `admin_head` and `wp_head` filters.
         *
         * @since 1.4.0
         * @access public
         */
        public function print_style()
        {
        }
        public function on_update_mode($old_value, $value)
        {
        }
        /**
         * Maintenance mode constructor.
         *
         * Initializing Elementor maintenance mode.
         *
         * @since 1.4.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Print Template Description
         *
         * Prints the template description
         *
         * @since 2.2.0
         * @access private
         */
        private function print_template_description()
        {
        }
    }
    /**
     * Elementor maintenance.
     *
     * Elementor maintenance handler class is responsible for setting up Elementor
     * activation and uninstallation hooks.
     *
     * @since 1.0.0
     */
    class Maintenance
    {
        /**
         * Activate Elementor.
         *
         * Set Elementor activation hook.
         *
         * Fired by `register_activation_hook` when the plugin is activated.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function activation($network_wide)
        {
        }
        /**
         * Uninstall Elementor.
         *
         * Set Elementor uninstallation hook.
         *
         * Fired by `register_uninstall_hook` when the plugin is uninstalled.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function uninstall()
        {
        }
        /**
         * Init.
         *
         * Initialize Elementor Maintenance.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function init()
        {
        }
    }
    /**
     * Elementor controls manager.
     *
     * Elementor controls manager handler class is responsible for registering and
     * initializing all the supported controls, both regular controls and the group
     * controls.
     *
     * @since 1.0.0
     */
    class Controls_Manager
    {
        /**
         * Content tab.
         */
        const TAB_CONTENT = 'content';
        /**
         * Style tab.
         */
        const TAB_STYLE = 'style';
        /**
         * Advanced tab.
         */
        const TAB_ADVANCED = 'advanced';
        /**
         * Responsive tab.
         */
        const TAB_RESPONSIVE = 'responsive';
        /**
         * Layout tab.
         */
        const TAB_LAYOUT = 'layout';
        /**
         * Settings tab.
         */
        const TAB_SETTINGS = 'settings';
        /**
         * Text control.
         */
        const TEXT = 'text';
        /**
         * Number control.
         */
        const NUMBER = 'number';
        /**
         * Textarea control.
         */
        const TEXTAREA = 'textarea';
        /**
         * Select control.
         */
        const SELECT = 'select';
        /**
         * Switcher control.
         */
        const SWITCHER = 'switcher';
        /**
         * Button control.
         */
        const BUTTON = 'button';
        /**
         * Hidden control.
         */
        const HIDDEN = 'hidden';
        /**
         * Heading control.
         */
        const HEADING = 'heading';
        /**
         * Raw HTML control.
         */
        const RAW_HTML = 'raw_html';
        /**
         * Deprecated Notice control.
         */
        const DEPRECATED_NOTICE = 'deprecated_notice';
        /**
         * Popover Toggle control.
         */
        const POPOVER_TOGGLE = 'popover_toggle';
        /**
         * Section control.
         */
        const SECTION = 'section';
        /**
         * Tab control.
         */
        const TAB = 'tab';
        /**
         * Tabs control.
         */
        const TABS = 'tabs';
        /**
         * Divider control.
         */
        const DIVIDER = 'divider';
        /**
         * Color control.
         */
        const COLOR = 'color';
        /**
         * Media control.
         */
        const MEDIA = 'media';
        /**
         * Slider control.
         */
        const SLIDER = 'slider';
        /**
         * Dimensions control.
         */
        const DIMENSIONS = 'dimensions';
        /**
         * Choose control.
         */
        const CHOOSE = 'choose';
        /**
         * WYSIWYG control.
         */
        const WYSIWYG = 'wysiwyg';
        /**
         * Code control.
         */
        const CODE = 'code';
        /**
         * Font control.
         */
        const FONT = 'font';
        /**
         * Image dimensions control.
         */
        const IMAGE_DIMENSIONS = 'image_dimensions';
        /**
         * WordPress widget control.
         */
        const WP_WIDGET = 'wp_widget';
        /**
         * URL control.
         */
        const URL = 'url';
        /**
         * Repeater control.
         */
        const REPEATER = 'repeater';
        /**
         * Icon control.
         */
        const ICON = 'icon';
        /**
         * Icons control.
         */
        const ICONS = 'icons';
        /**
         * Gallery control.
         */
        const GALLERY = 'gallery';
        /**
         * Structure control.
         */
        const STRUCTURE = 'structure';
        /**
         * Select2 control.
         */
        const SELECT2 = 'select2';
        /**
         * Date/Time control.
         */
        const DATE_TIME = 'date_time';
        /**
         * Box shadow control.
         */
        const BOX_SHADOW = 'box_shadow';
        /**
         * Text shadow control.
         */
        const TEXT_SHADOW = 'text_shadow';
        /**
         * Entrance animation control.
         */
        const ANIMATION = 'animation';
        /**
         * Hover animation control.
         */
        const HOVER_ANIMATION = 'hover_animation';
        /**
         * Exit animation control.
         */
        const EXIT_ANIMATION = 'exit_animation';
        /**
         * Controls.
         *
         * Holds the list of all the controls. Default is `null`.
         *
         * @since 1.0.0
         * @access private
         *
         * @var Base_Control[]
         */
        private $controls = null;
        /**
         * Control groups.
         *
         * Holds the list of all the control groups. Default is an empty array.
         *
         * @since 1.0.0
         * @access private
         *
         * @var Group_Control_Base[]
         */
        private $control_groups = [];
        /**
         * Control stacks.
         *
         * Holds the list of all the control stacks. Default is an empty array.
         *
         * @since 1.0.0
         * @access private
         *
         * @var array
         */
        private $stacks = [];
        /**
         * Tabs.
         *
         * Holds the list of all the tabs.
         *
         * @since 1.0.0
         * @access private
         * @static
         *
         * @var array
         */
        private static $tabs;
        /**
         * Init tabs.
         *
         * Initialize control tabs.
         *
         * @since 1.6.0
         * @access private
         * @static
         */
        private static function init_tabs()
        {
        }
        /**
         * Get tabs.
         *
         * Retrieve the tabs of the current control.
         *
         * @since 1.6.0
         * @access public
         * @static
         *
         * @return array Control tabs.
         */
        public static function get_tabs()
        {
        }
        /**
         * Add tab.
         *
         * This method adds a new tab to the current control.
         *
         * @since 1.6.0
         * @access public
         * @static
         *
         * @param string $tab_name  Tab name.
         * @param string $tab_label Tab label.
         */
        public static function add_tab($tab_name, $tab_label = '')
        {
        }
        public static function get_groups_names()
        {
        }
        public static function get_controls_names()
        {
        }
        /**
         * Register controls.
         *
         * This method creates a list of all the supported controls by requiring the
         * control files and initializing each one of them.
         *
         * The list of supported controls includes the regular controls and the group
         * controls.
         *
         * External developers can register new controls by hooking to the
         * `elementor/controls/controls_registered` action.
         *
         * @since 3.1.0
         * @access private
         */
        private function register_controls()
        {
        }
        /**
         * Register control.
         *
         * This method adds a new control to the controls list. It adds any given
         * control to any given control instance.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string       $control_id       Control ID.
         * @param Base_Control $control_instance Control instance, usually the
         *                                       current instance.
         */
        public function register_control($control_id, \Elementor\Base_Control $control_instance)
        {
        }
        /**
         * Unregister control.
         *
         * This method removes control from the controls list.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $control_id Control ID.
         *
         * @return bool True if the control was removed, False otherwise.
         */
        public function unregister_control($control_id)
        {
        }
        /**
         * Get controls.
         *
         * Retrieve the controls list from the current instance.
         *
         * @since 1.0.0
         * @access public
         *
         * @return Base_Control[] Controls list.
         */
        public function get_controls()
        {
        }
        /**
         * Get control.
         *
         * Retrieve a specific control from the current controls instance.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $control_id Control ID.
         *
         * @return bool|Base_Control Control instance, or False otherwise.
         */
        public function get_control($control_id)
        {
        }
        /**
         * Get controls data.
         *
         * Retrieve all the registered controls and all the data for each control.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array {
         *    Control data.
         *
         *    @type array $name Control data.
         * }
         */
        public function get_controls_data()
        {
        }
        /**
         * Render controls.
         *
         * Generate the final HTML for all the registered controls using the element
         * template.
         *
         * @since 1.0.0
         * @access public
         */
        public function render_controls()
        {
        }
        /**
         * Get control groups.
         *
         * Retrieve a specific group for a given ID, or a list of all the control
         * groups.
         *
         * If the given group ID is wrong, it will return `null`. When the ID valid,
         * it will return the group control instance. When no ID was given, it will
         * return all the control groups.
         *
         * @since 1.0.10
         * @access public
         *
         * @param string $id Optional. Group ID. Default is null.
         *
         * @return null|Group_Control_Base|Group_Control_Base[]
         */
        public function get_control_groups($id = null)
        {
        }
        /**
         * Add group control.
         *
         * This method adds a new group control to the control groups list. It adds
         * any given group control to any given group control instance.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string             $id       Group control ID.
         * @param Group_Control_Base $instance Group control instance, usually the
         *                                     current instance.
         *
         * @return Group_Control_Base Group control instance.
         */
        public function add_group_control($id, $instance)
        {
        }
        /**
         * Enqueue control scripts and styles.
         *
         * Used to register and enqueue custom scripts and styles used by the control.
         *
         * @since 1.0.0
         * @access public
         */
        public function enqueue_control_scripts()
        {
        }
        /**
         * Open new stack.
         *
         * This method adds a new stack to the control stacks list. It adds any
         * given stack to the current control instance.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Controls_Stack $controls_stack Controls stack.
         */
        public function open_stack(\Elementor\Controls_Stack $controls_stack)
        {
        }
        /**
         * Add control to stack.
         *
         * This method adds a new control to the stack.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Controls_Stack $element      Element stack.
         * @param string         $control_id   Control ID.
         * @param array          $control_data Control data.
         * @param array          $options      Optional. Control additional options.
         *                                     Default is an empty array.
         *
         * @return bool True if control added, False otherwise.
         */
        public function add_control_to_stack(\Elementor\Controls_Stack $element, $control_id, $control_data, $options = [])
        {
        }
        /**
         * Remove control from stack.
         *
         * This method removes a control a the stack.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $stack_id   Stack ID.
         * @param array|string $control_id The ID of the control to remove.
         *
         * @return bool|\WP_Error True if the stack was removed, False otherwise.
         */
        public function remove_control_from_stack($stack_id, $control_id)
        {
        }
        /**
         * Get control from stack.
         *
         * Retrieve a specific control for a given a specific stack.
         *
         * If the given control does not exist in the stack, or the stack does not
         * exist, it will return `WP_Error`. Otherwise, it will retrieve the control
         * from the stack.
         *
         * @since 1.1.0
         * @access public
         *
         * @param string $stack_id   Stack ID.
         * @param string $control_id Control ID.
         *
         * @return array|\WP_Error The control, or an error.
         */
        public function get_control_from_stack($stack_id, $control_id)
        {
        }
        /**
         * Update control in stack.
         *
         * This method updates the control data for a given stack.
         *
         * @since 1.1.0
         * @access public
         *
         * @param Controls_Stack $element      Element stack.
         * @param string         $control_id   Control ID.
         * @param array          $control_data Control data.
         * @param array          $options      Optional. Control additional options.
         *                                     Default is an empty array.
         *
         * @return bool True if control updated, False otherwise.
         */
        public function update_control_in_stack(\Elementor\Controls_Stack $element, $control_id, $control_data, array $options = [])
        {
        }
        /**
         * Get stacks.
         *
         * Retrieve a specific stack for the list of stacks.
         *
         * If the given stack is wrong, it will return `null`. When the stack valid,
         * it will return the the specific stack. When no stack was given, it will
         * return all the stacks.
         *
         * @since 1.7.1
         * @access public
         *
         * @param string $stack_id Optional. stack ID. Default is null.
         *
         * @return null|array A list of stacks.
         */
        public function get_stacks($stack_id = null)
        {
        }
        /**
         * Get element stack.
         *
         * Retrieve a specific stack for the list of stacks from the current instance.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Controls_Stack $controls_stack  Controls stack.
         *
         * @return null|array Stack data if it exist, `null` otherwise.
         */
        public function get_element_stack(\Elementor\Controls_Stack $controls_stack)
        {
        }
        /**
         * Add custom CSS controls.
         *
         * This method adds a new control for the "Custom CSS" feature. The free
         * version of elementor uses this method to display an upgrade message to
         * Elementor Pro.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Controls_Stack $controls_stack .
         * @param string $tab
         * @param array $additional_messages
         *
         */
        public function add_custom_css_controls(\Elementor\Controls_Stack $controls_stack, $tab = self::TAB_ADVANCED, $additional_messages = [])
        {
        }
        public function get_teaser_template($texts)
        {
        }
        /**
         * Add custom attributes controls.
         *
         * This method adds a new control for the "Custom Attributes" feature. The free
         * version of elementor uses this method to display an upgrade message to
         * Elementor Pro.
         *
         * @since 2.8.3
         * @access public
         *
         * @param Controls_Stack $controls_stack.
         */
        public function add_custom_attributes_controls(\Elementor\Controls_Stack $controls_stack)
        {
        }
    }
    /**
     * Elementor elements manager.
     *
     * Elementor elements manager handler class is responsible for registering and
     * initializing all the supported elements.
     *
     * @since 1.0.0
     */
    class Elements_Manager
    {
        /**
         * Element types.
         *
         * Holds the list of all the element types.
         *
         * @access private
         *
         * @var Element_Base[]
         */
        private $_element_types;
        /**
         * Element categories.
         *
         * Holds the list of all the element categories.
         *
         * @access private
         *
         * @var
         */
        private $categories;
        /**
         * Elements constructor.
         *
         * Initializing Elementor elements manager.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Create element instance.
         *
         * This method creates a new element instance for any given element.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array        $element_data Element data.
         * @param array        $element_args Optional. Element arguments. Default is
         *                                   an empty array.
         * @param Element_Base $element_type Optional. Element type. Default is null.
         *
         * @return Element_Base|null Element instance if element created, or null
         *                           otherwise.
         */
        public function create_element_instance(array $element_data, array $element_args = [], \Elementor\Element_Base $element_type = null)
        {
        }
        /**
         * Get element categories.
         *
         * Retrieve the list of categories the element belongs to.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Element categories.
         */
        public function get_categories()
        {
        }
        /**
         * Add element category.
         *
         * Register new category for the element.
         *
         * @since 1.7.12
         * @access public
         *
         * @param string $category_name       Category name.
         * @param array  $category_properties Category properties.
         */
        public function add_category($category_name, $category_properties)
        {
        }
        /**
         * Register element type.
         *
         * Add new type to the list of registered types.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Element_Base $element Element instance.
         *
         * @return bool Whether the element type was registered.
         */
        public function register_element_type(\Elementor\Element_Base $element)
        {
        }
        /**
         * Unregister element type.
         *
         * Remove element type from the list of registered types.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $name Element name.
         *
         * @return bool Whether the element type was unregister, or not.
         */
        public function unregister_element_type($name)
        {
        }
        /**
         * Get element types.
         *
         * Retrieve the list of all the element types, or if a specific element name
         * was provided retrieve his element types.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $element_name Optional. Element name. Default is null.
         *
         * @return null|Element_Base|Element_Base[] Element types, or a list of all the element
         *                             types, or null if element does not exist.
         */
        public function get_element_types($element_name = null)
        {
        }
        /**
         * Get element types config.
         *
         * Retrieve the config of all the element types.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Element types config.
         */
        public function get_element_types_config()
        {
        }
        /**
         * Render elements content.
         *
         * Used to generate the elements templates on the editor.
         *
         * @since 1.0.0
         * @access public
         */
        public function render_elements_content()
        {
        }
        /**
         * Init elements.
         *
         * Initialize Elementor elements by registering the supported elements.
         * Elementor supports by default `section` element and `column` element.
         *
         * @since 2.0.0
         * @access private
         */
        private function init_elements()
        {
        }
        /**
         * Init categories.
         *
         * Initialize the element categories.
         *
         * @since 1.7.12
         * @access private
         */
        private function init_categories()
        {
        }
        /**
         * Require files.
         *
         * Require Elementor element base class and column, section and repeater
         * elements.
         *
         * @since 1.0.0
         * @access private
         */
        private function require_files()
        {
        }
    }
    /**
     * Elementor icons manager.
     *
     * Elementor icons manager handler class
     *
     * @since 2.4.0
     */
    class Icons_Manager
    {
        const NEEDS_UPDATE_OPTION = 'icon_manager_needs_update';
        /**
         * Tabs.
         *
         * Holds the list of all the tabs.
         *
         * @access private
         * @static
         * @since 2.4.0
         * @var array
         */
        private static $tabs;
        private static function get_needs_upgrade_option()
        {
        }
        /**
         * register styles
         *
         * Used to register all icon types stylesheets so they could be enqueued later by widgets
         */
        public function register_styles()
        {
        }
        /**
         * Init Tabs
         *
         * Initiate Icon Manager Tabs.
         *
         * @access private
         * @static
         * @since 2.4.0
         */
        private static function init_tabs()
        {
        }
        /**
         * Get Icon Manager Tabs
         * @return array
         */
        public static function get_icon_manager_tabs()
        {
        }
        public static function enqueue_shim()
        {
        }
        private static function get_fa_asset_url($filename, $ext_type = 'css', $add_suffix = true)
        {
        }
        public static function get_icon_manager_tabs_config()
        {
        }
        private static function render_svg_icon($value)
        {
        }
        private static function render_icon_html($icon, $attributes = [], $tag = 'i')
        {
        }
        /**
         * Render Icon
         *
         * Used to render Icon for \Elementor\Controls_Manager::ICONS
         * @param array $icon             Icon Type, Icon value
         * @param array $attributes       Icon HTML Attributes
         * @param string $tag             Icon HTML tag, defaults to <i>
         *
         * @return mixed|string
         */
        public static function render_icon($icon, $attributes = [], $tag = 'i')
        {
        }
        /**
         * Font Awesome 4 to font Awesome 5 Value Migration
         *
         * used to convert string value of Icon control to array value of Icons control
         * ex: 'fa fa-star' => [ 'value' => 'fas fa-star', 'library' => 'fa-solid' ]
         *
         * @param $value
         *
         * @return array
         */
        public static function fa4_to_fa5_value_migration($value)
        {
        }
        /**
         * on_import_migration
         * @param array $element        settings array
         * @param string $old_control   old control id
         * @param string $new_control   new control id
         * @param bool $remove_old      boolean weather to remove old control or not
         *
         * @return array
         */
        public static function on_import_migration(array $element, $old_control = '', $new_control = '', $remove_old = false)
        {
        }
        /**
         * is_migration_allowed
         * @return bool
         */
        public static function is_migration_allowed()
        {
        }
        /**
         * Register_Admin Settings
         *
         * adds Font Awesome migration / update admin settings
         * @param Settings $settings
         */
        public function register_admin_settings(\Elementor\Settings $settings)
        {
        }
        public function register_admin_tools_settings(\Elementor\Tools $settings)
        {
        }
        /**
         * Ajax Upgrade to FontAwesome 5
         */
        public function ajax_upgrade_to_fa5()
        {
        }
        /**
         * Add Update Needed Flag
         * @param array $settings
         *
         * @return array;
         */
        public function add_update_needed_flag($settings)
        {
        }
        public function enqueue_fontawesome_css()
        {
        }
        /**
         * @deprecated 3.1.0
         */
        public function add_admin_strings()
        {
        }
        /**
         * @since 3.0.0
         * @deprecated 3.0.0
         */
        public function register_ajax_actions()
        {
        }
        /**
         * @since 3.0.0.
         * @deprecated 3.0.0
         */
        public function ajax_enable_svg_uploads()
        {
        }
        /**
         * Icons Manager constructor
         */
        public function __construct()
        {
        }
    }
    /**
     * Elementor images manager.
     *
     * Elementor images manager handler class is responsible for retrieving image
     * details.
     *
     * @since 1.0.0
     */
    class Images_Manager
    {
        /**
         * Get images details.
         *
         * Retrieve details for all the images.
         *
         * Fired by `wp_ajax_elementor_get_images_details` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function get_images_details()
        {
        }
        /**
         * Get image details.
         *
         * Retrieve single image details.
         *
         * Fired by `wp_ajax_elementor_get_image_details` action.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string       $id            Image attachment ID.
         * @param string|array $size          Image size. Accepts any valid image
         *                                    size, or an array of width and height
         *                                    values in pixels (in that order).
         * @param string       $is_first_time Set 'true' string to force reloading
         *                                    all image sizes.
         *
         * @return array URLs with different image sizes.
         */
        public function get_details($id, $size, $is_first_time)
        {
        }
        /**
         * Get Light-Box Image Attributes
         *
         * Used to retrieve an array of image attributes to be used for displaying an image in Elementor's Light Box module.
         *
         * @param int $id       The ID of the image
         *
         * @return array An array of image attributes including `title` and `description`.
         * @since 2.9.0
         * @access public
         */
        public function get_lightbox_image_attributes($id)
        {
        }
        /**
         * Images manager constructor.
         *
         * Initializing Elementor images manager.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
    }
    /**
     * Elementor skins manager.
     *
     * Elementor skins manager handler class is responsible for registering and
     * initializing all the supported skins.
     *
     * @since 1.0.0
     */
    class Skins_Manager
    {
        /**
         * Registered Skins.
         *
         * Holds the list of all the registered skins for all the widgets.
         *
         * @since 1.0.0
         * @access private
         *
         * @var array Registered skins.
         */
        private $_skins = [];
        /**
         * Add new skin.
         *
         * Register a single new skin for a widget.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Widget_Base $widget Elementor widget.
         * @param Skin_Base   $skin   Elementor skin.
         *
         * @return true True if skin added.
         */
        public function add_skin(\Elementor\Widget_Base $widget, \Elementor\Skin_Base $skin)
        {
        }
        /**
         * Remove a skin.
         *
         * Unregister an existing skin from a widget.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Widget_Base $widget  Elementor widget.
         * @param string      $skin_id Elementor skin ID.
         *
         * @return true|\WP_Error True if skin removed, `WP_Error` otherwise.
         */
        public function remove_skin(\Elementor\Widget_Base $widget, $skin_id)
        {
        }
        /**
         * Get skins.
         *
         * Retrieve all the skins assigned for a specific widget.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Widget_Base $widget Elementor widget.
         *
         * @return false|array Skins if the widget has skins, False otherwise.
         */
        public function get_skins(\Elementor\Widget_Base $widget)
        {
        }
        /**
         * Skins manager constructor.
         *
         * Initializing Elementor skins manager by requiring the skin base class.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
    }
    /**
     * Elementor widgets manager.
     *
     * Elementor widgets manager handler class is responsible for registering and
     * initializing all the supported Elementor widgets.
     *
     * @since 1.0.0
     */
    class Widgets_Manager
    {
        /**
         * Widget types.
         *
         * Holds the list of all the widget types.
         *
         * @since 1.0.0
         * @access private
         *
         * @var Widget_Base[]
         */
        private $_widget_types = null;
        /**
         * Init widgets.
         *
         * Initialize Elementor widgets manager. Include all the the widgets files
         * and register each Elementor and WordPress widget.
         *
         * @since 2.0.0
         * @access private
         */
        private function init_widgets()
        {
        }
        /**
         * Register WordPress widgets.
         *
         * Add native WordPress widget to the list of registered widget types.
         *
         * Exclude the widgets that are in Elementor widgets black list. Theme and
         * plugin authors can filter the black list.
         *
         * @since 2.0.0
         * @access private
         */
        private function register_wp_widgets()
        {
        }
        /**
         * Require files.
         *
         * Require Elementor widget base class.
         *
         * @since 2.0.0
         * @access private
         */
        private function require_files()
        {
        }
        /**
         * Register widget type.
         *
         * Add a new widget type to the list of registered widget types.
         *
         * @since 1.0.0
         * @access public
         *
         * @param Widget_Base $widget Elementor widget.
         *
         * @return true True if the widget was registered.
         */
        public function register_widget_type(\Elementor\Widget_Base $widget)
        {
        }
        /**
         * Unregister widget type.
         *
         * Removes widget type from the list of registered widget types.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $name Widget name.
         *
         * @return true True if the widget was unregistered, False otherwise.
         */
        public function unregister_widget_type($name)
        {
        }
        /**
         * Get widget types.
         *
         * Retrieve the registered widget types list.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $widget_name Optional. Widget name. Default is null.
         *
         * @return Widget_Base|Widget_Base[]|null Registered widget types.
         */
        public function get_widget_types($widget_name = null)
        {
        }
        /**
         * Get widget types config.
         *
         * Retrieve all the registered widgets with config for each widgets.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Registered widget types with each widget config.
         */
        public function get_widget_types_config()
        {
        }
        public function ajax_get_widget_types_controls_config(array $data)
        {
        }
        /**
         * Ajax render widget.
         *
         * Ajax handler for Elementor render_widget.
         *
         * Fired by `wp_ajax_elementor_render_widget` action.
         *
         * @since 1.0.0
         * @access public
         *
         * @throws \Exception If current user don't have permissions to edit the post.
         *
         * @param array $request Ajax request.
         *
         * @return array {
         *     Rendered widget.
         *
         *     @type string $render The rendered HTML.
         * }
         */
        public function ajax_render_widget($request)
        {
        }
        /**
         * Ajax get WordPress widget form.
         *
         * Ajax handler for Elementor editor get_wp_widget_form.
         *
         * Fired by `wp_ajax_elementor_editor_get_wp_widget_form` action.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $request Ajax request.
         *
         * @return bool|string Rendered widget form.
         */
        public function ajax_get_wp_widget_form($request)
        {
        }
        /**
         * Render widgets content.
         *
         * Used to generate the widget templates on the editor using Underscore JS
         * template, for all the registered widget types.
         *
         * @since 1.0.0
         * @access public
         */
        public function render_widgets_content()
        {
        }
        /**
         * Get widgets frontend settings keys.
         *
         * Retrieve frontend controls settings keys for all the registered widget
         * types.
         *
         * @since 1.3.0
         * @access public
         *
         * @return array Registered widget types with settings keys for each widget.
         */
        public function get_widgets_frontend_settings_keys()
        {
        }
        /**
         * Enqueue widgets scripts.
         *
         * Enqueue all the scripts defined as a dependency for each widget.
         *
         * @since 1.3.0
         * @access public
         */
        public function enqueue_widgets_scripts()
        {
        }
        /**
         * Enqueue widgets styles
         *
         * Enqueue all the styles defined as a dependency for each widget
         *
         * @access public
         */
        public function enqueue_widgets_styles()
        {
        }
        /**
         * Retrieve inline editing configuration.
         *
         * Returns general inline editing configurations like toolbar types etc.
         *
         * @access public
         * @since 1.8.0
         *
         * @return array {
         *     Inline editing configuration.
         *
         *     @type array $toolbar {
         *         Toolbar types and the actions each toolbar includes.
         *         Note: Wysiwyg controls uses the advanced toolbar, textarea controls
         *         uses the basic toolbar and text controls has no toolbar.
         *
         *         @type array $basic    Basic actions included in the edit tool.
         *         @type array $advanced Advanced actions included in the edit tool.
         *     }
         * }
         */
        public function get_inline_editing_config()
        {
        }
        /**
         * Widgets manager constructor.
         *
         * Initializing Elementor widgets manager.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Register ajax actions.
         *
         * Add new actions to handle data after an ajax requests returned.
         *
         * @since 2.0.0
         * @access public
         *
         * @param Ajax $ajax_manager
         */
        public function register_ajax_actions(\Elementor\Core\Common\Modules\Ajax\Module $ajax_manager)
        {
        }
    }
    /**
     * Elementor WordPress widgets manager.
     *
     * Elementor WordPress widgets manager handler class is responsible for
     * registering and initializing all the supported controls, both regular
     * controls and the group controls.
     *
     * @since 1.5.0
     */
    class WordPress_Widgets_Manager
    {
        /**
         * WordPress widgets manager constructor.
         *
         * Initializing the WordPress widgets manager in Elementor editor.
         *
         * @since 1.5.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Before enqueue scripts.
         *
         * Prints custom scripts required to run WordPress widgets in Elementor
         * editor.
         *
         * Fired by `elementor/editor/before_enqueue_scripts` action.
         *
         * @since 1.5.0
         * @access public
         */
        public function before_enqueue_scripts()
        {
        }
        /**
         * WordPress widgets footer.
         *
         * Prints WordPress widgets scripts in Elementor editor footer.
         *
         * Fired by `elementor/editor/footer` action.
         *
         * @since 1.5.0
         * @access public
         */
        public function footer()
        {
        }
    }
    /**
     * Elementor plugin.
     *
     * The main plugin handler class is responsible for initializing Elementor. The
     * class registers and all the components required to run the plugin.
     *
     * @since 1.0.0
     */
    class Plugin
    {
        /**
         * Instance.
         *
         * Holds the plugin instance.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @var Plugin
         */
        public static $instance = null;
        /**
         * Database.
         *
         * Holds the plugin database.
         *
         * @since 1.0.0
         * @access public
         *
         * @var DB
         */
        public $db;
        /**
         * Ajax Manager.
         *
         * Holds the plugin ajax manager.
         *
         * @since 1.9.0
         * @deprecated 2.3.0 Use `Plugin::$instance->common->get_component( 'ajax' )` instead
         * @access public
         *
         * @var Ajax
         */
        public $ajax;
        /**
         * Controls manager.
         *
         * Holds the plugin controls manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Controls_Manager
         */
        public $controls_manager;
        /**
         * Documents manager.
         *
         * Holds the documents manager.
         *
         * @since 2.0.0
         * @access public
         *
         * @var Documents_Manager
         */
        public $documents;
        /**
         * Schemes manager.
         *
         * Holds the plugin schemes manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Schemes_Manager
         */
        public $schemes_manager;
        /**
         * Elements manager.
         *
         * Holds the plugin elements manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Elements_Manager
         */
        public $elements_manager;
        /**
         * Widgets manager.
         *
         * Holds the plugin widgets manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Widgets_Manager
         */
        public $widgets_manager;
        /**
         * Revisions manager.
         *
         * Holds the plugin revisions manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Revisions_Manager
         */
        public $revisions_manager;
        /**
         * Images manager.
         *
         * Holds the plugin images manager.
         *
         * @since 2.9.0
         * @access public
         *
         * @var Images_Manager
         */
        public $images_manager;
        /**
         * Maintenance mode.
         *
         * Holds the plugin maintenance mode.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Maintenance_Mode
         */
        public $maintenance_mode;
        /**
         * Page settings manager.
         *
         * Holds the page settings manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Page_Settings_Manager
         */
        public $page_settings_manager;
        /**
         * Dynamic tags manager.
         *
         * Holds the dynamic tags manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Dynamic_Tags_Manager
         */
        public $dynamic_tags;
        /**
         * Settings.
         *
         * Holds the plugin settings.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Settings
         */
        public $settings;
        /**
         * Role Manager.
         *
         * Holds the plugin Role Manager
         *
         * @since 2.0.0
         * @access public
         *
         * @var \Elementor\Core\RoleManager\Role_Manager
         */
        public $role_manager;
        /**
         * Admin.
         *
         * Holds the plugin admin.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Admin
         */
        public $admin;
        /**
         * Tools.
         *
         * Holds the plugin tools.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Tools
         */
        public $tools;
        /**
         * Preview.
         *
         * Holds the plugin preview.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Preview
         */
        public $preview;
        /**
         * Editor.
         *
         * Holds the plugin editor.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Editor
         */
        public $editor;
        /**
         * Frontend.
         *
         * Holds the plugin frontend.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Frontend
         */
        public $frontend;
        /**
         * Heartbeat.
         *
         * Holds the plugin heartbeat.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Heartbeat
         */
        public $heartbeat;
        /**
         * System info.
         *
         * Holds the system info data.
         *
         * @since 1.0.0
         * @access public
         *
         * @var System_Info\Main
         */
        public $system_info;
        /**
         * Template library manager.
         *
         * Holds the template library manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var TemplateLibrary\Manager
         */
        public $templates_manager;
        /**
         * Skins manager.
         *
         * Holds the skins manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Skins_Manager
         */
        public $skins_manager;
        /**
         * Files Manager.
         *
         * Holds the files manager.
         *
         * @since 2.1.0
         * @access public
         *
         * @var Files_Manager
         */
        public $files_manager;
        /**
         * Assets Manager.
         *
         * Holds the Assets manager.
         *
         * @since 2.6.0
         * @access public
         *
         * @var Assets_Manager
         */
        public $assets_manager;
        /**
         * Files Manager.
         *
         * Holds the files manager.
         *
         * @since 1.0.0
         * @access public
         * @deprecated 2.1.0 Use `Plugin::$files_manager` instead
         *
         * @var Files_Manager
         */
        private $posts_css_manager;
        /**
         * WordPress widgets manager.
         *
         * Holds the WordPress widgets manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var WordPress_Widgets_Manager
         */
        public $wordpress_widgets_manager;
        /**
         * Modules manager.
         *
         * Holds the modules manager.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Modules_Manager
         */
        public $modules_manager;
        /**
         * Beta testers.
         *
         * Holds the plugin beta testers.
         *
         * @since 1.0.0
         * @access public
         *
         * @var Beta_Testers
         */
        public $beta_testers;
        /**
         * @var Inspector
         * @deprecated 2.1.2 Use $inspector.
         */
        public $debugger;
        /**
         * @var Inspector
         */
        public $inspector;
        /**
         * @var CommonApp
         */
        public $common;
        /**
         * @var Log_Manager
         */
        public $logger;
        /**
         * @var Dev_Tools
         */
        private $dev_tools;
        /**
         * @var Core\Upgrade\Manager
         */
        public $upgrade;
        /**
         * @var Core\Kits\Manager
         */
        public $kits_manager;
        /**
         * @var \Core\Data\Manager
         */
        public $data_manager;
        public $legacy_mode;
        /**
         * @var Core\App\App
         */
        public $app;
        /**
         * @var Wp_Api
         */
        public $wp;
        /**
         * @var Experiments_Manager
         */
        public $experiments;
        /**
         * Clone.
         *
         * Disable class cloning and throw an error on object clone.
         *
         * The whole idea of the singleton design pattern is that there is a single
         * object. Therefore, we don't want the object to be cloned.
         *
         * @access public
         * @since 1.0.0
         */
        public function __clone()
        {
        }
        /**
         * Wakeup.
         *
         * Disable unserializing of the class.
         *
         * @access public
         * @since 1.0.0
         */
        public function __wakeup()
        {
        }
        /**
         * Instance.
         *
         * Ensures only one instance of the plugin class is loaded or can be loaded.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return Plugin An instance of the class.
         */
        public static function instance()
        {
        }
        /**
         * Init.
         *
         * Initialize Elementor Plugin. Register Elementor support for all the
         * supported post types and initialize Elementor components.
         *
         * @since 1.0.0
         * @access public
         */
        public function init()
        {
        }
        /**
         * Get install time.
         *
         * Retrieve the time when Elementor was installed.
         *
         * @since 2.6.0
         * @access public
         * @static
         *
         * @return int Unix timestamp when Elementor was installed.
         */
        public function get_install_time()
        {
        }
        /**
         * @since 2.3.0
         * @access public
         */
        public function on_rest_api_init()
        {
        }
        /**
         * Init components.
         *
         * Initialize Elementor components. Register actions, run setting manager,
         * initialize all the components that run elementor, and if in admin page
         * initialize admin components.
         *
         * @since 1.0.0
         * @access private
         */
        private function init_components()
        {
        }
        /**
         * @since 2.3.0
         * @access public
         */
        public function init_common()
        {
        }
        /**
         * Get Legacy Mode
         *
         * @since 3.0.0
         * @deprecated 3.1.0 Use `Plugin::$instance->experiments->is_feature_active()` instead
         *
         * @param string $mode_name Optional. Default is null
         *
         * @return bool|bool[]
         */
        public function get_legacy_mode($mode_name = null)
        {
        }
        /**
         * Add custom post type support.
         *
         * Register Elementor support for all the supported post types defined by
         * the user in the admin screen and saved as `elementor_cpt_support` option
         * in WordPress `$wpdb->options` table.
         *
         * If no custom post type selected, usually in new installs, this method
         * will return the two default post types: `page` and `post`.
         *
         * @since 1.0.0
         * @access private
         */
        private function add_cpt_support()
        {
        }
        /**
         * Register autoloader.
         *
         * Elementor autoloader loads all the classes needed to run the plugin.
         *
         * @since 1.6.0
         * @access private
         */
        private function register_autoloader()
        {
        }
        /**
         * Plugin Magic Getter
         *
         * @since 3.1.0
         * @access public
         *
         * @param $property
         * @return mixed
         * @throws \Exception
         */
        public function __get($property)
        {
        }
        /**
         * Plugin constructor.
         *
         * Initializing Elementor plugin.
         *
         * @since 1.0.0
         * @access private
         */
        private function __construct()
        {
        }
        public static final function get_title()
        {
        }
    }
    /**
     * Elementor preview.
     *
     * Elementor preview handler class is responsible for initializing Elementor in
     * preview mode.
     *
     * @since 1.0.0
     */
    class Preview extends \Elementor\Core\Base\App
    {
        /**
         * Is Preview.
         *
         * Holds a flag if current request is a preview.
         * The flag is not related to a specific post or edit permissions.
         *
         * @since 2.9.5
         * @access private
         *
         * @var bool Is Preview.
         */
        private $is_preview;
        /**
         * Post ID.
         *
         * Holds the ID of the current post being previewed.
         *
         * @since 1.0.0
         * @access private
         *
         * @var int Post ID.
         */
        private $post_id;
        /**
         * Get module name.
         *
         * Retrieve the module name.
         *
         * @since 3.0.0
         * @access public
         * @abstract
         *
         * @return string Module name.
         */
        public function get_name()
        {
        }
        /**
         * Init.
         *
         * Initialize Elementor preview mode.
         *
         * Fired by `template_redirect` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function init()
        {
        }
        /**
         * Retrieve post ID.
         *
         * Get the ID of the current post.
         *
         * @since 1.8.0
         * @access public
         *
         * @return int Post ID.
         */
        public function get_post_id()
        {
        }
        /**
         * Is Preview.
         *
         * Whether current request is the elementor preview iframe.
         * The flag is not related to a specific post or edit permissions.
         *
         * @since 2.9.5
         * @access public
         *
         * @return bool
         */
        public function is_preview()
        {
        }
        /**
         * Whether preview mode is active.
         *
         * Used to determine whether we are in the preview mode (iframe).
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $post_id Optional. Post ID. Default is `0`.
         *
         * @return bool Whether preview mode is active.
         */
        public function is_preview_mode($post_id = 0)
        {
        }
        /**
         * Builder wrapper.
         *
         * Used to add an empty HTML wrapper for the builder, the javascript will add
         * the content later.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $content The content of the builder.
         *
         * @return string HTML wrapper for the builder.
         */
        public function builder_wrapper($content)
        {
        }
        /**
         * Enqueue preview styles.
         *
         * Registers all the preview styles and enqueues them.
         *
         * Fired by `wp_enqueue_scripts` action.
         *
         * @since 1.0.0
         * @access private
         */
        private function enqueue_styles()
        {
        }
        /**
         * Enqueue preview scripts.
         *
         * Registers all the preview scripts and enqueues them.
         *
         * Fired by `wp_enqueue_scripts` action.
         *
         * @since 1.5.4
         * @access private
         */
        private function enqueue_scripts()
        {
        }
        public function rocket_loader_filter($tag, $handle, $src)
        {
        }
        /**
         * Elementor Preview footer scripts and styles.
         *
         * Handle styles and scripts from frontend.
         *
         * Fired by `wp_footer` action.
         *
         * @since 2.0.9
         * @access public
         */
        public function wp_footer()
        {
        }
        /**
         * Preview constructor.
         *
         * Initializing Elementor preview.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
    }
    /**
     * Elementor rollback.
     *
     * Elementor rollback handler class is responsible for rolling back Elementor to
     * previous version.
     *
     * @since 1.5.0
     */
    class Rollback
    {
        /**
         * Package URL.
         *
         * Holds the package URL.
         *
         * @since 1.5.0
         * @access protected
         *
         * @var string Package URL.
         */
        protected $package_url;
        /**
         * Version.
         *
         * Holds the version.
         *
         * @since 1.5.0
         * @access protected
         *
         * @var string Package URL.
         */
        protected $version;
        /**
         * Plugin name.
         *
         * Holds the plugin name.
         *
         * @since 1.5.0
         * @access protected
         *
         * @var string Plugin name.
         */
        protected $plugin_name;
        /**
         * Plugin slug.
         *
         * Holds the plugin slug.
         *
         * @since 1.5.0
         * @access protected
         *
         * @var string Plugin slug.
         */
        protected $plugin_slug;
        /**
         * Rollback constructor.
         *
         * Initializing Elementor rollback.
         *
         * @since 1.5.0
         * @access public
         *
         * @param array $args Optional. Rollback arguments. Default is an empty array.
         */
        public function __construct($args = [])
        {
        }
        /**
         * Print inline style.
         *
         * Add an inline CSS to the rollback page.
         *
         * @since 1.5.0
         * @access private
         */
        private function print_inline_style()
        {
        }
        /**
         * Apply package.
         *
         * Change the plugin data when WordPress checks for updates. This method
         * modifies package data to update the plugin from a specific URL containing
         * the version package.
         *
         * @since 1.5.0
         * @access protected
         */
        protected function apply_package()
        {
        }
        /**
         * Upgrade.
         *
         * Run WordPress upgrade to rollback Elementor to previous version.
         *
         * @since 1.5.0
         * @access protected
         */
        protected function upgrade()
        {
        }
        /**
         * Run.
         *
         * Rollback Elementor to previous versions.
         *
         * @since 1.5.0
         * @access public
         */
        public function run()
        {
        }
    }
    /**
     * Elementor settings controls.
     *
     * Elementor settings controls handler class responsible for creating the final
     * HTML for various input field types used in Elementor settings pages.
     *
     * @since 1.0.0
     */
    class Settings_Controls
    {
        /**
         * Render settings control.
         *
         * Generates the final HTML on the frontend for any given field based on
         * the field type (text, select, checkbox, raw HTML, etc.).
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $field Optional. Field data. Default is an empty array.
         */
        public static function render($field = [])
        {
        }
        /**
         * Render text control.
         *
         * Generates the final HTML for text controls.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @param array $field Field data.
         */
        private static function text(array $field)
        {
        }
        /**
         * Render checkbox control.
         *
         * Generates the final HTML for checkbox controls.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @param array $field Field data.
         */
        private static function checkbox(array $field)
        {
        }
        /**
         * Render checkbox list control.
         *
         * Generates the final HTML for checkbox list controls.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @param array $field Field data.
         */
        private static function checkbox_list(array $field)
        {
        }
        /**
         * Render select control.
         *
         * Generates the final HTML for select controls.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @param array $field Field data.
         */
        private static function select(array $field)
        {
        }
        /**
         * Render checkbox list control for CPT.
         *
         * Generates the final HTML for checkbox list controls populated with Custom Post Types.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @param array $field Field data.
         */
        private static function checkbox_list_cpt(array $field)
        {
        }
        /**
         * Render checkbox list control for user roles.
         *
         * Generates the final HTML for checkbox list controls populated with user roles.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @param array $field Field data.
         */
        private static function checkbox_list_roles(array $field)
        {
        }
        /**
         * Render raw HTML control.
         *
         * Generates the final HTML for raw HTML controls.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @param array $field Field data.
         */
        private static function raw_html(array $field)
        {
        }
    }
    /**
     * Elementor settings page.
     *
     * An abstract class that provides the needed properties and methods to handle
     * WordPress dashboard settings pages in inheriting classes.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Settings_Page
    {
        /**
         * Settings page ID.
         */
        const PAGE_ID = '';
        /**
         * Tabs.
         *
         * Holds the settings page tabs, sections and fields.
         *
         * @access private
         *
         * @var array
         */
        private $tabs;
        /**
         * Create tabs.
         *
         * Return the settings page tabs, sections and fields.
         *
         * @since 1.5.0
         * @access protected
         * @abstract
         */
        protected abstract function create_tabs();
        /**
         * Get settings page title.
         *
         * Retrieve the title for the settings page.
         *
         * @since 1.5.0
         * @access protected
         * @abstract
         */
        protected abstract function get_page_title();
        /**
         * Get settings page URL.
         *
         * Retrieve the URL of the settings page.
         *
         * @since 1.5.0
         * @access public
         * @static
         *
         * @return string Settings page URL.
         */
        public static final function get_url()
        {
        }
        /**
         * Settings page constructor.
         *
         * Initializing Elementor settings page.
         *
         * @since 1.5.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Get tabs.
         *
         * Retrieve the settings page tabs, sections and fields.
         *
         * @since 1.5.0
         * @access public
         *
         * @return array Settings page tabs, sections and fields.
         */
        public final function get_tabs()
        {
        }
        /**
         * Add tab.
         *
         * Register a new tab to a settings page.
         *
         * @since 1.5.0
         * @access public
         *
         * @param string $tab_id   Tab ID.
         * @param array  $tab_args Optional. Tab arguments. Default is an empty array.
         */
        public final function add_tab($tab_id, array $tab_args = [])
        {
        }
        /**
         * Add section.
         *
         * Register a new section to a tab.
         *
         * @since 1.5.0
         * @access public
         *
         * @param string $tab_id       Tab ID.
         * @param string $section_id   Section ID.
         * @param array  $section_args Optional. Section arguments. Default is an
         *                             empty array.
         */
        public final function add_section($tab_id, $section_id, array $section_args = [])
        {
        }
        /**
         * Add field.
         *
         * Register a new field to a section.
         *
         * @since 1.5.0
         * @access public
         *
         * @param string $tab_id     Tab ID.
         * @param string $section_id Section ID.
         * @param string $field_id   Field ID.
         * @param array  $field_args Field arguments.
         */
        public final function add_field($tab_id, $section_id, $field_id, array $field_args)
        {
        }
        /**
         * Add fields.
         *
         * Register multiple fields to a section.
         *
         * @since 1.5.0
         * @access public
         *
         * @param string $tab_id     Tab ID.
         * @param string $section_id Section ID.
         * @param array  $fields     {
         *    An array of fields.
         *
         *    @type string $field_id   Field ID.
         *    @type array  $field_args Field arguments.
         * }
         */
        public final function add_fields($tab_id, $section_id, array $fields)
        {
        }
        /**
         * Register settings fields.
         *
         * In each tab register his inner sections, and in each section register his
         * inner fields.
         *
         * @since 1.5.0
         * @access public
         */
        public final function register_settings_fields()
        {
        }
        /**
         * Display settings page.
         *
         * Output the content for the settings page.
         *
         * @since 1.5.0
         * @access public
         */
        public function display_settings_page()
        {
        }
        public function get_usage_fields()
        {
        }
        /**
         * Ensure tabs.
         *
         * Make sure the settings page has tabs before inserting any new sections or
         * fields.
         *
         * @since 1.5.0
         * @access private
         */
        private function ensure_tabs()
        {
        }
    }
    /**
     * Elementor "Settings" page in WordPress Dashboard.
     *
     * Elementor settings page handler class responsible for creating and displaying
     * Elementor "Settings" page in WordPress dashboard.
     *
     * @since 1.0.0
     */
    class Settings extends \Elementor\Settings_Page
    {
        /**
         * Settings page ID for Elementor settings.
         */
        const PAGE_ID = 'elementor';
        /**
         * Go Pro menu priority.
         */
        const MENU_PRIORITY_GO_PRO = 502;
        /**
         * Settings page field for update time.
         */
        const UPDATE_TIME_FIELD = '_elementor_settings_update_time';
        /**
         * Settings page general tab slug.
         */
        const TAB_GENERAL = 'general';
        /**
         * Settings page style tab slug.
         */
        const TAB_STYLE = 'style';
        /**
         * Settings page integrations tab slug.
         */
        const TAB_INTEGRATIONS = 'integrations';
        /**
         * Settings page advanced tab slug.
         */
        const TAB_ADVANCED = 'advanced';
        /**
         * Register admin menu.
         *
         * Add new Elementor Settings admin menu.
         *
         * Fired by `admin_menu` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function register_admin_menu()
        {
        }
        /**
         * Reorder the Elementor menu items in admin.
         * Based on WC.
         *
         * @since 2.4.0
         *
         * @param array $menu_order Menu order.
         * @return array
         */
        public function menu_order($menu_order)
        {
        }
        /**
         * Register Elementor Pro sub-menu.
         *
         * Add new Elementor Pro sub-menu under the main Elementor menu.
         *
         * Fired by `admin_menu` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function register_pro_menu()
        {
        }
        /**
         * Register Elementor knowledge base sub-menu.
         *
         * Add new Elementor knowledge base sub-menu under the main Elementor menu.
         *
         * Fired by `admin_menu` action.
         *
         * @since 2.0.3
         * @access public
         */
        public function register_knowledge_base_menu()
        {
        }
        /**
         * Go Elementor Pro.
         *
         * Redirect the Elementor Pro page the clicking the Elementor Pro menu link.
         *
         * Fired by `admin_init` action.
         *
         * @since 2.0.3
         * @access public
         */
        public function handle_external_redirects()
        {
        }
        /**
         * Display settings page.
         *
         * Output the content for the getting started page.
         *
         * @since 2.2.0
         * @access public
         */
        public function elementor_getting_started()
        {
        }
        /**
         * Display settings page.
         *
         * Output the content for the custom fonts page.
         *
         * @since 2.0.0
         * @access public
         */
        public function elementor_custom_fonts()
        {
        }
        /**
         * Display settings page.
         *
         * Output the content for the custom icons page.
         *
         * @since 2.8.0
         * @access public
         */
        public function elementor_custom_icons()
        {
        }
        /**
         * Display settings page.
         *
         * Output the content for the Popups page.
         *
         * @since 2.4.0
         * @access public
         */
        public function elementor_popups()
        {
        }
        /**
         * On admin init.
         *
         * Preform actions on WordPress admin initialization.
         *
         * Fired by `admin_init` action.
         *
         * @since 2.0.0
         * @access public
         */
        public function on_admin_init()
        {
        }
        /**
         * Change "Settings" menu name.
         *
         * Update the name of the Settings admin menu from "Elementor" to "Settings".
         *
         * Fired by `admin_menu` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function admin_menu_change_name()
        {
        }
        /**
         * Update CSS print method.
         *
         * Clear post CSS cache.
         *
         * Fired by `add_option_elementor_css_print_method` and
         * `update_option_elementor_css_print_method` actions.
         *
         * @since 1.7.5
         * @access public
         * @deprecated 3.0.0
         */
        public function update_css_print_method()
        {
        }
        /**
         * Create tabs.
         *
         * Return the settings page tabs, sections and fields.
         *
         * @since 1.5.0
         * @access protected
         *
         * @return array An array with the settings page tabs, sections and fields.
         */
        protected function create_tabs()
        {
        }
        /**
         * Get settings page title.
         *
         * Retrieve the title for the settings page.
         *
         * @since 1.5.0
         * @access protected
         *
         * @return string Settings page title.
         */
        protected function get_page_title()
        {
        }
        /**
         * @since 2.2.0
         * @access private
         */
        private function maybe_remove_all_admin_notices()
        {
        }
        /**
         * Settings page constructor.
         *
         * Initializing Elementor "Settings" page.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
    }
    /**
     * Elementor "Tools" page in WordPress Dashboard.
     *
     * Elementor settings page handler class responsible for creating and displaying
     * Elementor "Tools" page in WordPress dashboard.
     *
     * @since 1.0.0
     */
    class Tools extends \Elementor\Settings_Page
    {
        /**
         * Settings page ID for Elementor tools.
         */
        const PAGE_ID = 'elementor-tools';
        /**
         * Register admin menu.
         *
         * Add new Elementor Tools admin menu.
         *
         * Fired by `admin_menu` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function register_admin_menu()
        {
        }
        /**
         * Clear cache.
         *
         * Delete post meta containing the post CSS file data. And delete the actual
         * CSS files from the upload directory.
         *
         * Fired by `wp_ajax_elementor_clear_cache` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function ajax_elementor_clear_cache()
        {
        }
        /**
         * Replace URLs.
         *
         * Sends an ajax request to replace old URLs to new URLs. This method also
         * updates all the Elementor data.
         *
         * Fired by `wp_ajax_elementor_replace_url` action.
         *
         * @since 1.1.0
         * @access public
         */
        public function ajax_elementor_replace_url()
        {
        }
        /**
         * Elementor version rollback.
         *
         * Rollback to previous Elementor version.
         *
         * Fired by `admin_post_elementor_rollback` action.
         *
         * @since 1.5.0
         * @access public
         */
        public function post_elementor_rollback()
        {
        }
        /**
         * Tools page constructor.
         *
         * Initializing Elementor "Tools" page.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        private function get_rollback_versions()
        {
        }
        /**
         * Create tabs.
         *
         * Return the tools page tabs, sections and fields.
         *
         * @since 1.5.0
         * @access protected
         *
         * @return array An array with the page tabs, sections and fields.
         */
        protected function create_tabs()
        {
        }
        /**
         * Get tools page title.
         *
         * Retrieve the title for the tools page.
         *
         * @since 1.5.0
         * @access protected
         *
         * @return string Tools page title.
         */
        protected function get_page_title()
        {
        }
    }
    /**
     * Elementor settings validations.
     *
     * Elementor settings validations handler class is responsible for validating settings
     * fields.
     *
     * @since 1.0.0
     */
    class Settings_Validations
    {
        /**
         * Validate HTML field.
         *
         * Sanitize content for allowed HTML tags and remove backslashes before quotes.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param string $input Input field.
         *
         * @return string Input field.
         */
        public static function html($input)
        {
        }
        /**
         * Validate checkbox list.
         *
         * Make sure that an empty checkbox list field will return an array.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param mixed $input Input field.
         *
         * @return mixed Input field.
         */
        public static function checkbox_list($input)
        {
        }
        /**
         * Current Time
         *
         * Used to return current time
         *
         * @since 2.5.0
         * @access public
         * @static
         *
         * @param mixed $input Input field.
         *
         * @return int
         */
        public static function current_time($input)
        {
        }
        /**
         * Clear cache.
         *
         * Delete post meta containing the post CSS file data. And delete the actual
         * CSS files from the upload directory.
         *
         * @since 1.4.8
         * @access public
         * @static
         *
         * @param mixed $input Input field.
         *
         * @return mixed Input field.
         */
        public static function clear_cache($input)
        {
        }
    }
    /**
     * Elementor shapes.
     *
     * Elementor shapes handler class is responsible for setting up the supported
     * shape dividers.
     *
     * @since 1.3.0
     */
    class Shapes
    {
        /**
         * The exclude filter.
         */
        const FILTER_EXCLUDE = 'exclude';
        /**
         * The include filter.
         */
        const FILTER_INCLUDE = 'include';
        /**
         * Shapes.
         *
         * Holds the list of supported shapes.
         *
         * @since 1.3.0
         * @access private
         * @static
         *
         * @var array A list of supported shapes.
         */
        private static $shapes;
        /**
         * Get shapes.
         *
         * Retrieve a shape from the lists of supported shapes. If no shape specified
         * it will return all the supported shapes.
         *
         * @since 1.3.0
         * @access public
         * @static
         *
         * @param array $shape Optional. Specific shape. Default is `null`.
         *
         * @return array The specified shape or a list of all the supported shapes.
         */
        public static function get_shapes($shape = null)
        {
        }
        /**
         * Filter shapes.
         *
         * Retrieve shapes filtered by a specific condition, from the list of
         * supported shapes.
         *
         * @since 1.3.0
         * @access public
         * @static
         *
         * @param string $by     Specific condition to filter by.
         * @param string $filter Optional. Comparison condition to filter by.
         *                       Default is `include`.
         *
         * @return array A list of filtered shapes.
         */
        public static function filter_shapes($by, $filter = self::FILTER_INCLUDE)
        {
        }
        /**
         * Get shape path.
         *
         * For a given shape, retrieve the file path.
         *
         * @since 1.3.0
         * @access public
         * @static
         *
         * @param string $shape       The shape.
         * @param bool   $is_negative Optional. Whether the file name is negative or
         *                            not. Default is `false`.
         *
         * @return string Shape file path.
         */
        public static function get_shape_path($shape, $is_negative = false)
        {
        }
        /**
         * Init shapes.
         *
         * Set the supported shapes.
         *
         * @since 1.3.0
         * @access private
         * @static
         */
        private static function init_shapes()
        {
        }
        /**
         * Get Additional Shapes
         *
         * Used to add custom shapes to elementor.
         *
         * @since 2.5.0
         *
         * @return array
         */
        private static function get_additional_shapes()
        {
        }
        /**
         * Get Additional Shapes For Config
         *
         * Used to set additional shape paths for editor
         *
         * @since 2.5.0
         *
         * @return array|bool
         */
        public static function get_additional_shapes_for_config()
        {
        }
    }
    /**
     * Elementor stylesheet.
     *
     * Elementor stylesheet handler class responsible for setting up CSS rules and
     * properties, and all the CSS `@media` rule with supported viewport width.
     *
     * @since 1.0.0
     */
    class Stylesheet
    {
        /**
         * CSS Rules.
         *
         * Holds the list of CSS rules.
         *
         * @since 1.0.0
         * @access private
         *
         * @var array A list of CSS rules.
         */
        private $rules = [];
        /**
         * Devices.
         *
         * Holds the list of devices.
         *
         * @since 1.0.0
         * @access private
         *
         * @var array A list of devices.
         */
        private $devices = [];
        /**
         * Raw CSS.
         *
         * Holds the raw CSS.
         *
         * @since 1.0.0
         * @access private
         *
         * @var array The raw CSS.
         */
        private $raw = [];
        /**
         * Parse CSS rules.
         *
         * Goes over the list of CSS rules and generates the final CSS.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $rules CSS rules.
         *
         * @return string Parsed rules.
         */
        public static function parse_rules(array $rules)
        {
        }
        /**
         * Parse CSS properties.
         *
         * Goes over the selector properties and generates the CSS of the selector.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param array $properties CSS properties.
         *
         * @return string Parsed properties.
         */
        public static function parse_properties(array $properties)
        {
        }
        /**
         * Add device.
         *
         * Add a new device to the devices list.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $device_name      Device name.
         * @param string $device_max_point Device maximum point.
         *
         * @return Stylesheet The current stylesheet class instance.
         */
        public function add_device($device_name, $device_max_point)
        {
        }
        /**
         * Add rules.
         *
         * Add a new CSS rule to the rules list.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string       $selector    CSS selector.
         * @param array|string $style_rules Optional. Style rules. Default is `null`.
         * @param array        $query       Optional. Media query. Default is `null`.
         *
         * @return Stylesheet The current stylesheet class instance.
         */
        public function add_rules($selector, $style_rules = null, array $query = null)
        {
        }
        /**
         * Add raw CSS.
         *
         * Add a raw CSS rule.
         *
         * @since 1.0.8
         * @access public
         *
         * @param string $css    The raw CSS.
         * @param string $device Optional. The device. Default is empty.
         *
         * @return Stylesheet The current stylesheet class instance.
         */
        public function add_raw_css($css, $device = '')
        {
        }
        /**
         * Get CSS rules.
         *
         * Retrieve the CSS rules.
         *
         * @since 1.0.5
         * @access public
         *
         * @param string $device   Optional. The device. Default is empty.
         * @param string $selector Optional. CSS selector. Default is empty.
         * @param string $property Optional. CSS property. Default is empty.
         *
         * @return null|array CSS rules, or `null` if not rules found.
         */
        public function get_rules($device = null, $selector = null, $property = null)
        {
        }
        /**
         * To string.
         *
         * This magic method responsible for parsing the rules into one CSS string.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string CSS style.
         */
        public function __toString()
        {
        }
        /**
         * Get device maximum value.
         *
         * Retrieve the maximum size of any given device.
         *
         * @since 1.2.0
         * @access private
         *
         * @throws \RangeException If max value for this device is out of range.
         *
         * @param string $device_name Device name.
         *
         * @return int
         */
        private function get_device_max_value($device_name)
        {
        }
        /**
         * Query to hash.
         *
         * Turns the media query into a hashed string that represents the query
         * endpoint in the rules list.
         *
         * @since 1.2.0
         * @access private
         *
         * @param array $query CSS media query.
         *
         * @return string Hashed string of the query.
         */
        private function query_to_hash(array $query)
        {
        }
        /**
         * Hash to query.
         *
         * Turns the hashed string to an array that contains the data of the query
         * endpoint.
         *
         * @since 1.2.0
         * @access private
         *
         * @param string $hash Hashed string of the query.
         *
         * @return array Media query data.
         */
        private function hash_to_query($hash)
        {
        }
        /**
         * Add query hash.
         *
         * Register new endpoint query and sort the rules the way they should be
         * displayed in the final stylesheet based on the device and the viewport
         * width.
         *
         * @since 1.2.0
         * @access private
         *
         * @param string $query_hash Hashed string of the query.
         */
        private function add_query_hash($query_hash)
        {
        }
        /**
         * Get query hash style format.
         *
         * Retrieve formated media query rule with the endpoint width settings.
         *
         * The method returns the CSS `@media` rule and supported viewport width in
         * pixels. It can also handel multiple width endpoints.
         *
         * @since 1.2.0
         * @access private
         *
         * @param string $query_hash The hash of the query.
         *
         * @return string CSS media query.
         */
        private function get_query_hash_style_format($query_hash)
        {
        }
    }
}
namespace Elementor\TemplateLibrary\Classes {
    /**
     * Elementor template library import images.
     *
     * Elementor template library import images handler class is responsible for
     * importing remote images used by the template library.
     *
     * @since 1.0.0
     */
    class Import_Images
    {
        /**
         * Replaced images IDs.
         *
         * The IDs of all the new imported images. An array containing the old
         * attachment ID and the new attachment ID generated after the import.
         *
         * @since 1.0.0
         * @access private
         *
         * @var array
         */
        private $_replace_image_ids = [];
        /**
         * Get image hash.
         *
         * Retrieve the sha1 hash of the image URL.
         *
         * @since 2.0.0
         * @access private
         *
         * @param string $attachment_url The attachment URL.
         *
         * @return string Image hash.
         */
        private function get_hash_image($attachment_url)
        {
        }
        /**
         * Get saved image.
         *
         * Retrieve new image ID, if the image has a new ID after the import.
         *
         * @since 2.0.0
         * @access private
         *
         * @param array $attachment The attachment.
         *
         * @return false|array New image ID  or false.
         */
        private function get_saved_image($attachment)
        {
        }
        /**
         * Import image.
         *
         * Import a single image from a remote server, upload the image WordPress
         * uploads folder, create a new attachment in the database and updates the
         * attachment metadata.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $attachment The attachment.
         *
         * @return false|array Imported image data, or false.
         */
        public function import($attachment)
        {
        }
        /**
         * Template library import images constructor.
         *
         * Initializing the images import class used by the template library through
         * the WordPress Filesystem API.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
    }
}
namespace Elementor\TemplateLibrary {
    /**
     * Elementor template library manager.
     *
     * Elementor template library manager handler class is responsible for
     * initializing the template library.
     *
     * @since 1.0.0
     */
    class Manager
    {
        /**
         * Registered template sources.
         *
         * Holds a list of all the supported sources with their instances.
         *
         * @access protected
         *
         * @var Source_Base[]
         */
        protected $_registered_sources = [];
        /**
         * Imported template images.
         *
         * Holds an instance of `Import_Images` class.
         *
         * @access private
         *
         * @var Import_Images
         */
        private $_import_images = null;
        /**
         * Template library manager constructor.
         *
         * Initializing the template library manager by registering default template
         * sources and initializing ajax calls.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * @since 2.3.0
         * @access public
         */
        public function add_actions()
        {
        }
        /**
         * Get `Import_Images` instance.
         *
         * Retrieve the instance of the `Import_Images` class.
         *
         * @since 1.0.0
         * @access public
         *
         * @return Import_Images Imported images instance.
         */
        public function get_import_images_instance()
        {
        }
        /**
         * Register template source.
         *
         * Used to register new template sources displayed in the template library.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $source_class The name of source class.
         * @param array  $args         Optional. Class arguments. Default is an
         *                             empty array.
         *
         * @return \WP_Error|true True if the source was registered, `WP_Error`
         *                        otherwise.
         */
        public function register_source($source_class, $args = [])
        {
        }
        /**
         * Unregister template source.
         *
         * Remove an existing template sources from the list of registered template
         * sources.
         *
         * @deprecated 2.7.0
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $id The source ID.
         *
         * @return bool Whether the source was unregistered.
         */
        public function unregister_source($id)
        {
        }
        /**
         * Get registered template sources.
         *
         * Retrieve registered template sources.
         *
         * @since 1.0.0
         * @access public
         *
         * @return Source_Base[] Registered template sources.
         */
        public function get_registered_sources()
        {
        }
        /**
         * Get template source.
         *
         * Retrieve single template sources for a given template ID.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $id The source ID.
         *
         * @return false|Source_Base Template sources if one exist, False otherwise.
         */
        public function get_source($id)
        {
        }
        /**
         * Get templates.
         *
         * Retrieve all the templates from all the registered sources.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Templates array.
         */
        public function get_templates()
        {
        }
        /**
         * Get library data.
         *
         * Retrieve the library data.
         *
         * @since 1.9.0
         * @access public
         *
         * @param array $args Library arguments.
         *
         * @return array Library data.
         */
        public function get_library_data(array $args)
        {
        }
        /**
         * Save template.
         *
         * Save new or update existing template on the database.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $args Template arguments.
         *
         * @return \WP_Error|int The ID of the saved/updated template.
         */
        public function save_template(array $args)
        {
        }
        /**
         * Update template.
         *
         * Update template on the database.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $template_data New template data.
         *
         * @return \WP_Error|Source_Base Template sources instance if the templates
         *                               was updated, `WP_Error` otherwise.
         */
        public function update_template(array $template_data)
        {
        }
        /**
         * Update templates.
         *
         * Update template on the database.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $args Template arguments.
         *
         * @return \WP_Error|true True if templates updated, `WP_Error` otherwise.
         */
        public function update_templates(array $args)
        {
        }
        /**
         * Get template data.
         *
         * Retrieve the template data.
         *
         * @since 1.5.0
         * @access public
         *
         * @param array $args Template arguments.
         *
         * @return \WP_Error|bool|array ??
         */
        public function get_template_data(array $args)
        {
        }
        /**
         * Delete template.
         *
         * Delete template from the database.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $args Template arguments.
         *
         * @return \WP_Post|\WP_Error|false|null Post data on success, false or null
         *                                       or 'WP_Error' on failure.
         */
        public function delete_template(array $args)
        {
        }
        /**
         * Export template.
         *
         * Export template to a file.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $args Template arguments.
         *
         * @return mixed Whether the export succeeded or failed.
         */
        public function export_template(array $args)
        {
        }
        /**
         * @since 2.3.0
         * @access public
         */
        public function direct_import_template()
        {
        }
        /**
         * Import template.
         *
         * Import template from a file.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $data
         *
         * @return mixed Whether the export succeeded or failed.
         */
        public function import_template(array $data)
        {
        }
        /**
         * Mark template as favorite.
         *
         * Add the template to the user favorite templates.
         *
         * @since 1.9.0
         * @access public
         *
         * @param array $args Template arguments.
         *
         * @return mixed Whether the template marked as favorite.
         */
        public function mark_template_as_favorite($args)
        {
        }
        /**
         * Register default template sources.
         *
         * Register the 'local' and 'remote' template sources that Elementor use by
         * default.
         *
         * @since 1.0.0
         * @access private
         */
        private function register_default_sources()
        {
        }
        /**
         * Handle ajax request.
         *
         * Fire authenticated ajax actions for any given ajax request.
         *
         * @since 1.0.0
         * @access private
         *
         * @param string $ajax_request Ajax request.
         *
         * @param array $data
         *
         * @return mixed
         * @throws \Exception
         */
        private function handle_ajax_request($ajax_request, array $data)
        {
        }
        /**
         * Init ajax calls.
         *
         * Initialize template library ajax calls for allowed ajax requests.
         *
         * @since 2.3.0
         * @access public
         *
         * @param Ajax $ajax
         */
        public function register_ajax_actions(\Elementor\Core\Common\Modules\Ajax\Module $ajax)
        {
        }
        /**
         * @since 2.3.0
         * @access public
         */
        public function handle_direct_actions()
        {
        }
        /**
         * On successful template import.
         *
         * Redirect the user to the template library after template import was
         * successful finished.
         *
         * @since 2.3.0
         * @access private
         */
        private function on_direct_import_template_success()
        {
        }
        /**
         * @since 2.3.0
         * @access private
         */
        private function handle_direct_action_error($message)
        {
        }
        /**
         * Ensure arguments exist.
         *
         * Checks whether the required arguments exist in the specified arguments.
         *
         * @since 1.0.0
         * @access private
         *
         * @param array $required_args  Required arguments to check whether they
         *                              exist.
         * @param array $specified_args The list of all the specified arguments to
         *                              check against.
         *
         * @return \WP_Error|true True on success, 'WP_Error' otherwise.
         */
        private function ensure_args(array $required_args, array $specified_args)
        {
        }
    }
    /**
     * Elementor template library source base.
     *
     * Elementor template library source base handler class is responsible for
     * initializing all the methods controlling the source of Elementor templates.
     *
     * @since 1.0.0
     * @abstract
     */
    abstract class Source_Base
    {
        /**
         * User meta.
         *
         * Holds the current user meta data.
         *
         * @access private
         *
         * @var array
         */
        private $user_meta;
        /**
         * Get template ID.
         *
         * Retrieve the template ID.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         */
        public abstract function get_id();
        /**
         * Get template title.
         *
         * Retrieve the template title.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         */
        public abstract function get_title();
        /**
         * Register template data.
         *
         * Used to register custom template data like a post type, a taxonomy or any
         * other data.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         */
        public abstract function register_data();
        /**
         * Get templates.
         *
         * Retrieve templates from the template library.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         *
         * @param array $args Optional. Filter templates list based on a set of
         *                    arguments. Default is an empty array.
         */
        public abstract function get_items($args = []);
        /**
         * Get template.
         *
         * Retrieve a single template from the template library.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         *
         * @param int $template_id The template ID.
         */
        public abstract function get_item($template_id);
        /**
         * Get template data.
         *
         * Retrieve a single template data from the template library.
         *
         * @since 1.5.0
         * @access public
         * @abstract
         *
         * @param array $args Custom template arguments.
         */
        public abstract function get_data(array $args);
        /**
         * Delete template.
         *
         * Delete template from the database.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         *
         * @param int $template_id The template ID.
         */
        public abstract function delete_template($template_id);
        /**
         * Save template.
         *
         * Save new or update existing template on the database.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         *
         * @param array $template_data The template data.
         */
        public abstract function save_item($template_data);
        /**
         * Update template.
         *
         * Update template on the database.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         *
         * @param array $new_data New template data.
         */
        public abstract function update_item($new_data);
        /**
         * Export template.
         *
         * Export template to a file.
         *
         * @since 1.0.0
         * @access public
         * @abstract
         *
         * @param int $template_id The template ID.
         */
        public abstract function export_template($template_id);
        /**
         * Template library source base constructor.
         *
         * Initializing the template library source base by registering custom
         * template data.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Mark template as favorite.
         *
         * Update user meta containing his favorite templates. For a given template
         * ID, add the template to the favorite templates or remove it from the
         * favorites, based on the `favorite` parameter.
         *
         * @since 1.9.0
         * @access public
         *
         * @param int  $template_id The template ID.
         * @param bool $favorite    Optional. Whether the template is marked as
         *                          favorite, or not. Default is true.
         *
         * @return int|bool User meta ID if the key didn't exist, true on successful
         *                  update, false on failure.
         */
        public function mark_as_favorite($template_id, $favorite = true)
        {
        }
        /**
         * Get current user meta.
         *
         * Retrieve Elementor meta data for the current user.
         *
         * @since 1.9.0
         * @access public
         *
         * @param string $item Optional. User meta key. Default is null.
         *
         * @return null|array An array of user meta data, or null otherwise.
         */
        public function get_user_meta($item = null)
        {
        }
        /**
         * Update current user meta.
         *
         * Update user meta data based on meta key an value.
         *
         * @since 1.9.0
         * @access public
         *
         * @param string $key   Optional. User meta key.
         * @param mixed  $value Optional. User meta value.
         *
         * @return int|bool User meta ID if the key didn't exist, true on successful
         *                  update, false on failure.
         */
        public function update_user_meta($key, $value)
        {
        }
        /**
         * Replace elements IDs.
         *
         * For any given Elementor content/data, replace the IDs with new randomly
         * generated IDs.
         *
         * @since 1.0.0
         * @access protected
         *
         * @param array $content Any type of Elementor data.
         *
         * @return mixed Iterated data.
         */
        protected function replace_elements_ids($content)
        {
        }
        /**
         * Get Elementor library user meta prefix.
         *
         * Retrieve user meta prefix used to save Elementor data.
         *
         * @since 1.9.0
         * @access protected
         *
         * @return string User meta prefix.
         */
        protected function get_user_meta_prefix()
        {
        }
        /**
         * Process content for export/import.
         *
         * Process the content and all the inner elements, and prepare all the
         * elements data for export/import.
         *
         * @since 1.5.0
         * @access protected
         *
         * @param array  $content A set of elements.
         * @param string $method  Accepts either `on_export` to export data or
         *                        `on_import` to import data.
         *
         * @return mixed Processed content data.
         */
        protected function process_export_import_content($content, $method)
        {
        }
        /**
         * Process single element content for export/import.
         *
         * Process any given element and prepare the element data for export/import.
         *
         * @since 1.5.0
         * @access protected
         *
         * @param Controls_Stack $element
         * @param string         $method
         *
         * @return array Processed element data.
         */
        protected function process_element_export_import_content(\Elementor\Controls_Stack $element, $method)
        {
        }
    }
    /**
     * Elementor template library local source.
     *
     * Elementor template library local source handler class is responsible for
     * handling local Elementor templates saved by the user locally on his site.
     *
     * @since 1.0.0
     */
    class Source_Local extends \Elementor\TemplateLibrary\Source_Base
    {
        /**
         * Elementor template-library post-type slug.
         */
        const CPT = 'elementor_library';
        /**
         * Elementor template-library taxonomy slug.
         */
        const TAXONOMY_TYPE_SLUG = 'elementor_library_type';
        /**
         * Elementor template-library category slug.
         */
        const TAXONOMY_CATEGORY_SLUG = 'elementor_library_category';
        /**
         * Elementor template-library meta key.
         * @deprecated 2.3.0 Use \Elementor\Core\Base\Document::TYPE_META_KEY instead
         */
        const TYPE_META_KEY = '_elementor_template_type';
        /**
         * Elementor template-library temporary files folder.
         */
        const TEMP_FILES_DIR = 'elementor/tmp';
        /**
         * Elementor template-library bulk export action name.
         */
        const BULK_EXPORT_ACTION = 'elementor_export_multiple_templates';
        const ADMIN_MENU_SLUG = 'edit.php?post_type=elementor_library';
        const ADMIN_SCREEN_ID = 'edit-elementor_library';
        /**
         * Template types.
         *
         * Holds the list of supported template types that can be displayed.
         *
         * @access private
         * @static
         *
         * @var array
         */
        private static $template_types = [];
        /**
         * Post type object.
         *
         * Holds the post type object of the current post.
         *
         * @access private
         *
         * @var \WP_Post_Type
         */
        private $post_type_object;
        /**
         * @since 2.3.0
         * @access public
         * @static
         * @return array
         */
        public static function get_template_types()
        {
        }
        /**
         * Get local template type.
         *
         * Retrieve the template type from the post meta.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param int $template_id The template ID.
         *
         * @return mixed The value of meta data field.
         */
        public static function get_template_type($template_id)
        {
        }
        /**
         * Is base templates screen.
         *
         * Whether the current screen base is edit and the post type is template.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return bool True on base templates screen, False otherwise.
         */
        public static function is_base_templates_screen()
        {
        }
        /**
         * Add template type.
         *
         * Register new template type to the list of supported local template types.
         *
         * @since 1.0.3
         * @access public
         * @static
         *
         * @param string $type Template type.
         */
        public static function add_template_type($type)
        {
        }
        /**
         * Remove template type.
         *
         * Remove existing template type from the list of supported local template
         * types.
         *
         * @since 1.8.0
         * @access public
         * @static
         *
         * @param string $type Template type.
         */
        public static function remove_template_type($type)
        {
        }
        public static function get_admin_url($relative = false)
        {
        }
        /**
         * Get local template ID.
         *
         * Retrieve the local template ID.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string The local template ID.
         */
        public function get_id()
        {
        }
        /**
         * Get local template title.
         *
         * Retrieve the local template title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string The local template title.
         */
        public function get_title()
        {
        }
        /**
         * Register local template data.
         *
         * Used to register custom template data like a post type, a taxonomy or any
         * other data.
         *
         * The local template class registers a new `elementor_library` post type
         * and an `elementor_library_type` taxonomy. They are used to store data for
         * local templates saved by the user on his site.
         *
         * @since 1.0.0
         * @access public
         */
        public function register_data()
        {
        }
        /**
         * Remove Add New item from admin menu.
         *
         * Fired by `admin_menu` action.
         *
         * @since 2.4.0
         * @access public
         */
        public function admin_menu_reorder()
        {
        }
        public function admin_menu()
        {
        }
        public function admin_title($admin_title, $title)
        {
        }
        public function replace_admin_heading()
        {
        }
        /**
         * Get local templates.
         *
         * Retrieve local templates saved by the user on his site.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $args Optional. Filter templates based on a set of
         *                    arguments. Default is an empty array.
         *
         * @return array Local templates.
         */
        public function get_items($args = [])
        {
        }
        /**
         * Save local template.
         *
         * Save new or update existing template on the database.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $template_data Local template data.
         *
         * @return \WP_Error|int The ID of the saved/updated template, `WP_Error` otherwise.
         */
        public function save_item($template_data)
        {
        }
        /**
         * Update local template.
         *
         * Update template on the database.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $new_data New template data.
         *
         * @return \WP_Error|true True if template updated, `WP_Error` otherwise.
         */
        public function update_item($new_data)
        {
        }
        /**
         * Get local template.
         *
         * Retrieve a single local template saved by the user on his site.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $template_id The template ID.
         *
         * @return array Local template.
         */
        public function get_item($template_id)
        {
        }
        /**
         * Get template data.
         *
         * Retrieve the data of a single local template saved by the user on his site.
         *
         * @since 1.5.0
         * @access public
         *
         * @param array $args Custom template arguments.
         *
         * @return array Local template data.
         */
        public function get_data(array $args)
        {
        }
        /**
         * Delete local template.
         *
         * Delete template from the database.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $template_id The template ID.
         *
         * @return \WP_Post|\WP_Error|false|null Post data on success, false or null
         *                                       or 'WP_Error' on failure.
         */
        public function delete_template($template_id)
        {
        }
        /**
         * Export local template.
         *
         * Export template to a file.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $template_id The template ID.
         *
         * @return \WP_Error WordPress error if template export failed.
         */
        public function export_template($template_id)
        {
        }
        /**
         * Export multiple local templates.
         *
         * Export multiple template to a ZIP file.
         *
         * @since 1.6.0
         * @access public
         *
         * @param array $template_ids An array of template IDs.
         *
         * @return \WP_Error WordPress error if export failed.
         */
        public function export_multiple_templates(array $template_ids)
        {
        }
        /**
         * Find temporary files.
         *
         * Recursively finds a list of temporary files from the extracted zip file.
         *
         * Example return data:
         *
         * [
         *  0 => '/www/wp-content/uploads/elementor/tmp/5eb3a7a411d44/templates/block-2-col-marble-title.json',
         *  1 => '/www/wp-content/uploads/elementor/tmp/5eb3a7a411d44/templates/block-2-col-text-and-photo.json',
         * ]
         *
         * @since 2.9.8
         * @access private
         *
         * @param string $temp_path - The temporary file path to scan for template files
         *
         * @return array An array of temporary files on the filesystem
         */
        private function find_temp_files($temp_path)
        {
        }
        /**
         * Import local template.
         *
         * Import template from a file.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $name - The file name
         * @param string $path - The file path
         *
         * @return \WP_Error|array An array of items on success, 'WP_Error' on failure.
         */
        public function import_template($name, $path)
        {
        }
        /**
         * Post row actions.
         *
         * Add an export link to the template library action links table list.
         *
         * Fired by `post_row_actions` filter.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array    $actions An array of row action links.
         * @param \WP_Post $post    The post object.
         *
         * @return array An updated array of row action links.
         */
        public function post_row_actions($actions, \WP_Post $post)
        {
        }
        /**
         * Admin import template form.
         *
         * The import form displayed in "My Library" screen in WordPress dashboard.
         *
         * The form allows the user to import template in json/zip format to the site.
         *
         * Fired by `admin_footer` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function admin_import_template_form()
        {
        }
        /**
         * Block template frontend
         *
         * Don't display the single view of the template library post type in the
         * frontend, for users that don't have the proper permissions.
         *
         * Fired by `template_redirect` action.
         *
         * @since 1.0.0
         * @access public
         */
        public function block_template_frontend()
        {
        }
        /**
         * Is template library supports export.
         *
         * whether the template library supports export.
         *
         * Template saved by the user locally on his site, support export by default
         * but this can be changed using a filter.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $template_id The template ID.
         *
         * @return bool Whether the template library supports export.
         */
        public function is_template_supports_export($template_id)
        {
        }
        /**
         * Remove Elementor post state.
         *
         * Remove the 'elementor' post state from the display states of the post.
         *
         * Used to remove the 'elementor' post state from the template library items.
         *
         * Fired by `display_post_states` filter.
         *
         * @since 1.8.0
         * @access public
         *
         * @param array    $post_states An array of post display states.
         * @param \WP_Post $post        The current post object.
         *
         * @return array Updated array of post display states.
         */
        public function remove_elementor_post_state_from_library($post_states, $post)
        {
        }
        /**
         * Get template export link.
         *
         * Retrieve the link used to export a single template based on the template
         * ID.
         *
         * @since 2.0.0
         * @access private
         *
         * @param int $template_id The template ID.
         *
         * @return string Template export URL.
         */
        private function get_export_link($template_id)
        {
        }
        /**
         * On template save.
         *
         * Run this method when template is being saved.
         *
         * Fired by `save_post` action.
         *
         * @since 1.0.1
         * @access public
         *
         * @param int      $post_id Post ID.
         * @param \WP_Post $post    The current post object.
         */
        public function on_save_post($post_id, \WP_Post $post)
        {
        }
        /**
         * Save item type.
         *
         * When saving/updating templates, this method is used to update the post
         * meta data and the taxonomy.
         *
         * @since 1.0.1
         * @access private
         *
         * @param int    $post_id Post ID.
         * @param string $type    Item type.
         */
        private function save_item_type($post_id, $type)
        {
        }
        /**
         * Bulk export action.
         *
         * Adds an 'Export' action to the Bulk Actions drop-down in the template
         * library.
         *
         * Fired by `bulk_actions-edit-elementor_library` filter.
         *
         * @since 1.6.0
         * @access public
         *
         * @param array $actions An array of the available bulk actions.
         *
         * @return array An array of the available bulk actions.
         */
        public function admin_add_bulk_export_action($actions)
        {
        }
        /**
         * Add bulk export action.
         *
         * Handles the template library bulk export action.
         *
         * Fired by `handle_bulk_actions-edit-elementor_library` filter.
         *
         * @since 1.6.0
         * @access public
         *
         * @param string $redirect_to The redirect URL.
         * @param string $action      The action being taken.
         * @param array  $post_ids    The items to take the action on.
         */
        public function admin_export_multiple_templates($redirect_to, $action, $post_ids)
        {
        }
        /**
         * Print admin tabs.
         *
         * Used to output the template library tabs with their labels.
         *
         * Fired by `views_edit-elementor_library` filter.
         *
         * @since 2.0.0
         * @access public
         *
         * @param array $views An array of available list table views.
         *
         * @return array An updated array of available list table views.
         */
        public function admin_print_tabs($views)
        {
        }
        /**
         * Maybe render blank state.
         *
         * When the template library has no saved templates, display a blank admin page offering
         * to create the very first template.
         *
         * Fired by `manage_posts_extra_tablenav` action.
         *
         * @since 2.0.0
         * @access public
         *
         * @param string $which The location of the extra table nav markup: 'top' or 'bottom'.
         * @param array $args
         */
        public function maybe_render_blank_state($which, array $args = [])
        {
        }
        private function render_blank_state($current_type, array $args = [])
        {
        }
        /**
         * Print Blank State Template
         *
         * When the an entity (CPT, Taxonomy...etc) has no saved items, print a blank admin page offering
         * to create the very first item.
         *
         * This method is public because it needs to be accessed from outside the Source_Local
         *
         * @since 3.1.0
         * @access public
         *
         * @param string $current_type_label The Entity title
         * @param string $href The URL for the 'Add New' button
         * @param string $description The sub title describing the Entity (Post Type, Taxonomy, etc.)
         */
        public function print_blank_state_template($current_type_label, $href, $description)
        {
        }
        public function add_filter_by_category($post_type)
        {
        }
        /**
         * Import single template.
         *
         * Import template from a file to the database.
         *
         * @since 1.6.0
         * @access private
         *
         * @param string $file_name File name.
         *
         * @return \WP_Error|int|array Local template array, or template ID, or
         *                             `WP_Error`.
         */
        private function import_single_template($file_name)
        {
        }
        /**
         * Prepare template to export.
         *
         * Retrieve the relevant template data and return them as an array.
         *
         * @since 1.6.0
         * @access private
         *
         * @param int $template_id The template ID.
         *
         * @return \WP_Error|array Exported template data.
         */
        private function prepare_template_export($template_id)
        {
        }
        /**
         * Send file headers.
         *
         * Set the file header when export template data to a file.
         *
         * @since 1.6.0
         * @access private
         *
         * @param string $file_name File name.
         * @param int    $file_size File size.
         */
        private function send_file_headers($file_name, $file_size)
        {
        }
        /**
         * Get template label by type.
         *
         * Retrieve the template label for any given template type.
         *
         * @since 2.0.0
         * @access private
         *
         * @param string $template_type Template type.
         *
         * @return string Template label.
         */
        private function get_template_label_by_type($template_type)
        {
        }
        /**
         * Filter template types in admin query.
         *
         * Update the template types in the main admin query.
         *
         * Fired by `parse_query` action.
         *
         * @since 2.4.0
         * @access public
         *
         * @param \WP_Query $query The `WP_Query` instance.
         */
        public function admin_query_filter_types(\WP_Query $query)
        {
        }
        /**
         * Add template library actions.
         *
         * Register filters and actions for the template library.
         *
         * @since 2.0.0
         * @access private
         */
        private function add_actions()
        {
        }
        /**
         * @since 2.0.6
         * @access public
         */
        public function admin_columns_content($column_name, $post_id)
        {
        }
        /**
         * @since 2.0.6
         * @access public
         */
        public function admin_columns_headers($posts_columns)
        {
        }
        public function get_current_tab_group($default = '')
        {
        }
        private function get_library_title()
        {
        }
        private function is_current_screen()
        {
        }
        /**
         * Template library local source constructor.
         *
         * Initializing the template library local source base by registering custom
         * template data and running custom actions.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
    }
    /**
     * Elementor template library remote source.
     *
     * Elementor template library remote source handler class is responsible for
     * handling remote templates from Elementor.com servers.
     *
     * @since 1.0.0
     */
    class Source_Remote extends \Elementor\TemplateLibrary\Source_Base
    {
        /**
         * Get remote template ID.
         *
         * Retrieve the remote template ID.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string The remote template ID.
         */
        public function get_id()
        {
        }
        /**
         * Get remote template title.
         *
         * Retrieve the remote template title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string The remote template title.
         */
        public function get_title()
        {
        }
        /**
         * Register remote template data.
         *
         * Used to register custom template data like a post type, a taxonomy or any
         * other data.
         *
         * @since 1.0.0
         * @access public
         */
        public function register_data()
        {
        }
        /**
         * Get remote templates.
         *
         * Retrieve remote templates from Elementor.com servers.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $args Optional. Nou used in remote source.
         *
         * @return array Remote templates.
         */
        public function get_items($args = [])
        {
        }
        /**
         * Get remote template.
         *
         * Retrieve a single remote template from Elementor.com servers.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $template_id The template ID.
         *
         * @return array Remote template.
         */
        public function get_item($template_id)
        {
        }
        /**
         * Save remote template.
         *
         * Remote template from Elementor.com servers cannot be saved on the
         * database as they are retrieved from remote servers.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $template_data Remote template data.
         *
         * @return \WP_Error
         */
        public function save_item($template_data)
        {
        }
        /**
         * Update remote template.
         *
         * Remote template from Elementor.com servers cannot be updated on the
         * database as they are retrieved from remote servers.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $new_data New template data.
         *
         * @return \WP_Error
         */
        public function update_item($new_data)
        {
        }
        /**
         * Delete remote template.
         *
         * Remote template from Elementor.com servers cannot be deleted from the
         * database as they are retrieved from remote servers.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $template_id The template ID.
         *
         * @return \WP_Error
         */
        public function delete_template($template_id)
        {
        }
        /**
         * Export remote template.
         *
         * Remote template from Elementor.com servers cannot be exported from the
         * database as they are retrieved from remote servers.
         *
         * @since 1.0.0
         * @access public
         *
         * @param int $template_id The template ID.
         *
         * @return \WP_Error
         */
        public function export_template($template_id)
        {
        }
        /**
         * Get remote template data.
         *
         * Retrieve the data of a single remote template from Elementor.com servers.
         *
         * @since 1.5.0
         * @access public
         *
         * @param array  $args    Custom template arguments.
         * @param string $context Optional. The context. Default is `display`.
         *
         * @return array|\WP_Error Remote Template data.
         */
        public function get_data(array $args, $context = 'display')
        {
        }
        /**
         * @since 2.2.0
         * @access private
         */
        private function prepare_template(array $template_data)
        {
        }
    }
}
namespace Elementor {
    /**
     * Elementor tracker.
     *
     * Elementor tracker handler class is responsible for sending non-sensitive plugin
     * data to Elementor servers for users that actively allowed data tracking.
     *
     * @since 1.0.0
     */
    class Tracker
    {
        /**
         * API URL.
         *
         * Holds the URL of the Tracker API.
         *
         * @since 1.0.0
         * @access private
         *
         * @var string API URL.
         */
        private static $_api_url = 'https://my.elementor.com/api/v1/tracker/';
        private static $notice_shown = false;
        /**
         * Init.
         *
         * Initialize Elementor tracker.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function init()
        {
        }
        /**
         * Check for settings opt-in.
         *
         * Checks whether the site admin has opted-in for data tracking, or not.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param string $new_value Allowed tracking value.
         *
         * @return string Return `yes` if tracking allowed, `no` otherwise.
         */
        public static function check_for_settings_optin($new_value)
        {
        }
        /**
         * Send tracking data.
         *
         * Decide whether to send tracking data, or not.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param bool $override
         */
        public static function send_tracking_data($override = false)
        {
        }
        /**
         * Is allow track.
         *
         * Checks whether the site admin has opted-in for data tracking, or not.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function is_allow_track()
        {
        }
        /**
         * Handle tracker actions.
         *
         * Check if the user opted-in or opted-out and update the database.
         *
         * Fired by `admin_init` action.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function handle_tracker_actions()
        {
        }
        /**
         * @since 2.2.0
         * @access public
         * @static
         */
        public static function is_notice_shown()
        {
        }
        public static function set_opt_in($value)
        {
        }
        /**
         * Get system reports data.
         *
         * Retrieve the data from system reports.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @return array The data from system reports.
         */
        private static function get_system_reports_data()
        {
        }
        /**
         * Get last send time.
         *
         * Retrieve the last time tracking data was sent.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @return int|false The last time tracking data was sent, or false if
         *                   tracking data never sent.
         */
        private static function get_last_send_time()
        {
        }
        /**
         * Get posts usage.
         *
         * Retrieve the number of posts using Elementor.
         *
         * @since 2.0.0
         * @access public
         * @static
         *
         * @return array The number of posts using Elementor grouped by post types
         *               and post status.
         */
        public static function get_posts_usage()
        {
        }
        /**
         * Get library usage.
         *
         * Retrieve the number of Elementor library items saved.
         *
         * @since 2.0.0
         * @access public
         * @static
         *
         * @return array The number of Elementor library items grouped by post types
         *               and meta value.
         */
        public static function get_library_usage()
        {
        }
        /**
         * Get the tracking data
         *
         * Retrieve tracking data and apply filter
         *
         * @access public
         * @static
         *
         * @param bool $is_first_time
         *
         * @return array
         */
        public static function get_tracking_data($is_first_time = false)
        {
        }
    }
    /**
     * Elementor user.
     *
     * Elementor user handler class is responsible for checking if the user can edit
     * with Elementor and displaying different admin notices.
     *
     * @since 1.0.0
     */
    class User
    {
        /**
         * The admin notices key.
         */
        const ADMIN_NOTICES_KEY = 'elementor_admin_notices';
        const INTRODUCTION_KEY = 'elementor_introduction';
        const BETA_TESTER_META_KEY = 'elementor_beta_tester';
        /**
         * API URL.
         *
         * Holds the URL of the Beta Tester Opt-in API.
         *
         * @since 1.0.0
         * @access private
         *
         * @var string API URL.
         */
        const BETA_TESTER_API_URL = 'https://my.elementor.com/api/v1/beta_tester/';
        /**
         * Init.
         *
         * Initialize Elementor user.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function init()
        {
        }
        /**
         * @since 2.1.0
         * @access public
         * @static
         */
        public static function register_ajax_actions(\Elementor\Core\Common\Modules\Ajax\Module $ajax)
        {
        }
        /**
         * Is current user can edit.
         *
         * Whether the current user can edit the post.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param int $post_id Optional. The post ID. Default is `0`.
         *
         * @return bool Whether the current user can edit the post.
         */
        public static function is_current_user_can_edit($post_id = 0)
        {
        }
        /**
         * Is current user can access elementor.
         *
         * Whether the current user role is not excluded by Elementor Settings.
         *
         * @since 2.1.7
         * @access public
         * @static
         *
         * @return bool True if can access, False otherwise.
         */
        public static function is_current_user_in_editing_black_list()
        {
        }
        /**
         * Is current user can edit post type.
         *
         * Whether the current user can edit the given post type.
         *
         * @since 1.9.0
         * @access public
         * @static
         *
         * @param string $post_type the post type slug to check.
         *
         * @return bool True if can edit, False otherwise.
         */
        public static function is_current_user_can_edit_post_type($post_type)
        {
        }
        /**
         * Get user notices.
         *
         * Retrieve the list of notices for the current user.
         *
         * @since 2.0.0
         * @access private
         * @static
         *
         * @return array A list of user notices.
         */
        private static function get_user_notices()
        {
        }
        /**
         * Is user notice viewed.
         *
         * Whether the notice was viewed by the user.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param int $notice_id The notice ID.
         *
         * @return bool Whether the notice was viewed by the user.
         */
        public static function is_user_notice_viewed($notice_id)
        {
        }
        /**
         * Set admin notice as viewed.
         *
         * Flag the user admin notice as viewed using an authenticated ajax request.
         *
         * Fired by `wp_ajax_elementor_set_admin_notice_viewed` action.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function ajax_set_admin_notice_viewed()
        {
        }
        /**
         * @since 2.1.0
         * @access public
         * @static
         */
        public static function set_introduction_viewed(array $data)
        {
        }
        public static function register_as_beta_tester(array $data)
        {
        }
        /**
         * @param string $key
         *
         * @return array|mixed|string
         * @since  2.1.0
         * @access public
         * @static
         */
        public static function get_introduction_meta($key = '')
        {
        }
    }
    /**
     * Elementor utils.
     *
     * Elementor utils handler class is responsible for different utility methods
     * used by Elementor.
     *
     * @since 1.0.0
     */
    class Utils
    {
        const DEPRECATION_RANGE = 0.4;
        /**
         * A list of safe tage for `validate_html_tag` method.
         */
        const ALLOWED_HTML_WRAPPER_TAGS = ['article', 'aside', 'div', 'footer', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'header', 'main', 'nav', 'p', 'section', 'span'];
        /**
         * Is ajax.
         *
         * Whether the current request is a WordPress ajax request.
         *
         * @since 1.0.0
         * @deprecated 2.6.0 Use `wp_doing_ajax()` instead.
         * @access public
         * @static
         *
         * @return bool True if it's a WordPress ajax request, false otherwise.
         */
        public static function is_ajax()
        {
        }
        /**
         * Is WP CLI.
         *
         * @return bool
         */
        public static function is_wp_cli()
        {
        }
        /**
         * Is script debug.
         *
         * Whether script debug is enabled or not.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return bool True if it's a script debug is active, false otherwise.
         */
        public static function is_script_debug()
        {
        }
        /**
         * Get pro link.
         *
         * Retrieve the link to Elementor Pro.
         *
         * @since 1.7.0
         * @access public
         * @static
         *
         * @param string $link URL to Elementor pro.
         *
         * @return string Elementor pro link.
         */
        public static function get_pro_link($link)
        {
        }
        /**
         * Replace URLs.
         *
         * Replace old URLs to new URLs. This method also updates all the Elementor data.
         *
         * @since 2.1.0
         * @static
         * @access public
         *
         * @param $from
         * @param $to
         *
         * @return string
         * @throws \Exception
         */
        public static function replace_urls($from, $to)
        {
        }
        /**
         * Is post supports Elementor.
         *
         * Whether the post supports editing with Elementor.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @param int $post_id Optional. Post ID. Default is `0`.
         *
         * @return string True if post supports editing with Elementor, false otherwise.
         */
        public static function is_post_support($post_id = 0)
        {
        }
        /**
         * Is post type supports Elementor.
         *
         * Whether the post type supports editing with Elementor.
         *
         * @since 2.2.0
         * @access public
         * @static
         *
         * @param string $post_type Post Type.
         *
         * @return string True if post type supports editing with Elementor, false otherwise.
         */
        public static function is_post_type_support($post_type)
        {
        }
        /**
         * Get placeholder image source.
         *
         * Retrieve the source of the placeholder image.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string The source of the default placeholder image used by Elementor.
         */
        public static function get_placeholder_image_src()
        {
        }
        /**
         * Generate random string.
         *
         * Returns a string containing a hexadecimal representation of random number.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string Random string.
         */
        public static function generate_random_string()
        {
        }
        /**
         * Do not cache.
         *
         * Tell WordPress cache plugins not to cache this request.
         *
         * @since 1.0.0
         * @access public
         * @static
         */
        public static function do_not_cache()
        {
        }
        /**
         * Get timezone string.
         *
         * Retrieve timezone string from the WordPress database.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return string Timezone string.
         */
        public static function get_timezone_string()
        {
        }
        /**
         * Get create new post URL.
         *
         * Retrieve a custom URL for creating a new post/page using Elementor.
         *
         * @since 1.9.0
         * @access public
         * @static
         *
         * @param string $post_type Optional. Post type slug. Default is 'page'.
         * @param string|null $template_type Optional. Query arg 'template_type'. Default is null.
         *
         * @return string A URL for creating new post using Elementor.
         */
        public static function get_create_new_post_url($post_type = 'page', $template_type = null)
        {
        }
        /**
         * Get post autosave.
         *
         * Retrieve an autosave for any given post.
         *
         * @since 1.9.2
         * @access public
         * @static
         *
         * @param int $post_id Post ID.
         * @param int $user_id Optional. User ID. Default is `0`.
         *
         * @return \WP_Post|false Post autosave or false.
         */
        public static function get_post_autosave($post_id, $user_id = 0)
        {
        }
        /**
         * Is CPT supports custom templates.
         *
         * Whether the Custom Post Type supports templates.
         *
         * @since 2.0.0
         * @access public
         * @static
         *
         * @return bool True is templates are supported, False otherwise.
         */
        public static function is_cpt_custom_templates_supported()
        {
        }
        /**
         * @since 2.1.2
         * @access public
         * @static
         */
        public static function array_inject($array, $key, $insert)
        {
        }
        /**
         * Render html attributes
         *
         * @access public
         * @static
         * @param array $attributes
         *
         * @return string
         */
        public static function render_html_attributes(array $attributes)
        {
        }
        public static function get_meta_viewport($context = '')
        {
        }
        /**
         * Add Elementor Config js vars to the relevant script handle,
         * WP will wrap it with <script> tag.
         * To make sure this script runs thru the `script_loader_tag` hook, use a known handle value.
         * @param string $handle
         * @param string $js_var
         * @param mixed $config
         */
        public static function print_js_config($handle, $js_var, $config)
        {
        }
        public static function handle_deprecation($item, $version, $replacement = null)
        {
        }
        /**
         * Checks a control value for being empty, including a string of '0' not covered by PHP's empty().
         *
         * @param mixed $source
         * @param bool|string $key
         *
         * @return bool
         */
        public static function is_empty($source, $key = false)
        {
        }
        public static function has_pro()
        {
        }
        /**
         * Convert HTMLEntities to UTF-8 characters
         *
         * @param $string
         * @return string
         */
        public static function urlencode_html_entities($string)
        {
        }
        /**
         * Parse attributes that come as a string of comma-delimited key|value pairs.
         * Removes Javascript events and unescaped `href` attributes.
         *
         * @param string $attributes_string
         *
         * @param string $delimiter Default comma `,`.
         *
         * @return array
         */
        public static function parse_custom_attributes($attributes_string, $delimiter = ',')
        {
        }
        public static function find_element_recursive($elements, $id)
        {
        }
        /**
         * Change Submenu First Item Label
         *
         * Overwrite the label of the first submenu item of an admin menu item.
         *
         * Fired by `admin_menu` action.
         *
         * @since 3.1.0
         *
         * @param $menu_slug
         * @param $new_label
         * @access public
         */
        public static function change_submenu_first_item_label($menu_slug, $new_label)
        {
        }
        /**
         * Validate an HTML tag against a safe allowed list.
         *
         * @param string $tag
         *
         * @return string
         */
        public static function validate_html_tag($tag)
        {
        }
    }
    /**
     * Elementor accordion widget.
     *
     * Elementor widget that displays a collapsible display of content in an
     * accordion style, showing only one item at a time.
     *
     * @since 1.0.0
     */
    class Widget_Accordion extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve accordion widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve accordion widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve accordion widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register accordion widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render accordion widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render accordion widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor alert widget.
     *
     * Elementor widget that displays a collapsible display of content in an toggle
     * style, allowing the user to open multiple items.
     *
     * @since 1.0.0
     */
    class Widget_Alert extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve alert widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve alert widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve alert widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register alert widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render alert widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render alert widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor audio widget.
     *
     * Elementor widget that displays an audio player.
     *
     * @since 1.0.0
     */
    class Widget_Audio extends \Elementor\Widget_Base
    {
        /**
         * Current instance.
         *
         * @access protected
         *
         * @var array
         */
        protected $_current_instance = [];
        /**
         * Get widget name.
         *
         * Retrieve audio widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve audio widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve audio widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register audio widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render audio widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Filter audio widget oEmbed results.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access public
         *
         * @param string $html The HTML returned by the oEmbed provider.
         *
         * @return string Filtered audio widget oEmbed HTML.
         */
        public function filter_oembed_result($html)
        {
        }
        /**
         * Render audio widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor button widget.
     *
     * Elementor widget that displays a button with the ability to control every
     * aspect of the button design.
     *
     * @since 1.0.0
     */
    class Widget_Button extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve button widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve button widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve button widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the button widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get button sizes.
         *
         * Retrieve an array of button sizes for the button widget.
         *
         * @since 1.0.0
         * @access public
         * @static
         *
         * @return array An array containing button sizes.
         */
        public static function get_button_sizes()
        {
        }
        /**
         * Register button widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render button widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render button widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Render button text.
         *
         * Render button widget text.
         *
         * @since 1.5.0
         * @access protected
         */
        protected function render_text()
        {
        }
        public function on_import($element)
        {
        }
    }
    /**
     * Elementor common widget.
     *
     * Elementor base widget that gives you all the advanced options of the basic
     * widget.
     *
     * @since 1.0.0
     */
    class Widget_Common extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve common widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Show in panel.
         *
         * Whether to show the common widget in the panel or not.
         *
         * @since 1.0.0
         * @access public
         *
         * @return bool Whether to show the widget in the panel.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register common widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
    }
    /**
     * Elementor counter widget.
     *
     * Elementor widget that displays stats and numbers in an escalating manner.
     *
     * @since 1.0.0
     */
    class Widget_Counter extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve counter widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve counter widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve counter widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * Used to set scripts dependencies required to run the widget.
         *
         * @since 1.3.0
         * @access public
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register counter widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render counter widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Render counter widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor divider widget.
     *
     * Elementor widget that displays a line that divides different elements in the
     * page.
     *
     * @since 1.0.0
     */
    class Widget_Divider extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve divider widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve divider widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve divider widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the divider widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        private static function get_additional_styles()
        {
        }
        private function get_separator_styles()
        {
        }
        private function filter_styles_by($array, $key, $value)
        {
        }
        private function get_options_by_groups($styles, $group = false)
        {
        }
        /**
         * Register divider widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Build SVG
         *
         * Build SVG element markup based on the widgets settings.
         *
         * @return string - An SVG element.
         *
         * @since  2.7.0
         * @access private
         */
        private function build_svg()
        {
        }
        public function svg_to_data_uri($svg)
        {
        }
        /**
         * Render divider widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor google maps widget.
     *
     * Elementor widget that displays an embedded google map.
     *
     * @since 1.0.0
     */
    class Widget_Google_Maps extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve google maps widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve google maps widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve google maps widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the google maps widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register google maps widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render google maps widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render google maps widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor heading widget.
     *
     * Elementor widget that displays an eye-catching headlines.
     *
     * @since 1.0.0
     */
    class Widget_Heading extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve heading widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve heading widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve heading widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the heading widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register heading widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render heading widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render heading widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor HTML widget.
     *
     * Elementor widget that insert a custom HTML code into the page.
     *
     * @since 1.0.0
     */
    class Widget_Html extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve HTML widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve HTML widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve HTML widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register HTML widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render HTML widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render HTML widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor icon box widget.
     *
     * Elementor widget that displays an icon, a headline and a text.
     *
     * @since 1.0.0
     */
    class Widget_Icon_Box extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve icon box widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve icon box widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve icon box widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register icon box widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render icon box widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render icon box widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        public function on_import($element)
        {
        }
    }
    /**
     * Elementor icon list widget.
     *
     * Elementor widget that displays a bullet list with any chosen icons and texts.
     *
     * @since 1.0.0
     */
    class Widget_Icon_List extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve icon list widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve icon list widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve icon list widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register icon list widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render icon list widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render icon list widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        public function on_import($element)
        {
        }
    }
    /**
     * Elementor icon widget.
     *
     * Elementor widget that displays an icon from over 600+ icons.
     *
     * @since 1.0.0
     */
    class Widget_Icon extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve icon widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve icon widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve icon widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the icon widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register icon widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render icon widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render icon widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor image box widget.
     *
     * Elementor widget that displays an image, a headline and a text.
     *
     * @since 1.0.0
     */
    class Widget_Image_Box extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve image box widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve image box widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve image box widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register image box widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render image box widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render image box widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor image carousel widget.
     *
     * Elementor widget that displays a set of images in a rotating carousel or
     * slider.
     *
     * @since 1.0.0
     */
    class Widget_Image_Carousel extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve image carousel widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve image carousel widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve image carousel widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register image carousel widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render image carousel widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Retrieve image carousel link URL.
         *
         * @since 1.0.0
         * @access private
         *
         * @param array $attachment
         * @param object $instance
         *
         * @return array|string|false An array/string containing the attachment URL, or false if no link.
         */
        private function get_link_url($attachment, $instance)
        {
        }
        /**
         * Retrieve image carousel caption.
         *
         * @since 1.2.0
         * @access private
         *
         * @param array $attachment
         *
         * @return string The caption of the image.
         */
        private function get_image_caption($attachment)
        {
        }
    }
    /**
     * Elementor image gallery widget.
     *
     * Elementor widget that displays a set of images in an aligned grid.
     *
     * @since 1.0.0
     */
    class Widget_Image_Gallery extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve image gallery widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve image gallery widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve image gallery widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register image gallery widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render image gallery widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor image widget.
     *
     * Elementor widget that displays an image into the page.
     *
     * @since 1.0.0
     */
    class Widget_Image extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve image widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve image widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve image widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the image widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register image widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Check if the current widget has caption
         *
         * @access private
         * @since 2.3.0
         *
         * @param array $settings
         *
         * @return boolean
         */
        private function has_caption($settings)
        {
        }
        /**
         * Get the caption for current widget.
         *
         * @access private
         * @since 2.3.0
         * @param $settings
         *
         * @return string
         */
        private function get_caption($settings)
        {
        }
        /**
         * Render image widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render image widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Retrieve image widget link URL.
         *
         * @since 1.0.0
         * @access private
         *
         * @param array $settings
         *
         * @return array|string|false An array/string containing the link URL, or false if no link.
         */
        private function get_link_url($settings)
        {
        }
    }
    /**
     * Elementor menu anchor widget.
     *
     * Elementor widget that allows to link and menu to a specific position on the
     * page.
     *
     * @since 1.0.0
     */
    class Widget_Menu_Anchor extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve menu anchor widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve menu anchor widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve menu anchor widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register menu anchor widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render menu anchor widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render menu anchor widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor progress widget.
     *
     * Elementor widget that displays an escalating progress bar.
     *
     * @since 1.0.0
     */
    class Widget_Progress extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve progress widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve progress widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve progress widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register progress widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render progress widget output on the frontend.
         * Make sure value does no exceed 100%.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render progress widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor HTML widget.
     *
     * Elementor widget that insert a custom HTML code into the page.
     *
     */
    class Widget_Read_More extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve Read More widget name.
         *
         * @since 2.4.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve Read More widget title.
         *
         * @since 2.4.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve Read More widget icon.
         *
         * @since 2.4.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.4.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register HTML widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render Read More widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render Read More widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor shortcode widget.
     *
     * Elementor widget that insert any shortcodes into the page.
     *
     * @since 1.0.0
     */
    class Widget_Shortcode extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve shortcode widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve shortcode widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve shortcode widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Whether the reload preview is required or not.
         *
         * Used to determine whether the reload preview is required.
         *
         * @since 1.0.0
         * @access public
         *
         * @return bool Whether the reload preview is required.
         */
        public function is_reload_preview_required()
        {
        }
        /**
         * Register shortcode widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render shortcode widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render shortcode widget as plain content.
         *
         * Override the default behavior by printing the shortcode instead of rendering it.
         *
         * @since 1.0.0
         * @access public
         */
        public function render_plain_content()
        {
        }
        /**
         * Render shortcode widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor sidebar widget.
     *
     * Elementor widget that insert any sidebar into the page.
     *
     * @since 1.0.0
     */
    class Widget_Sidebar extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve sidebar widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve sidebar widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve sidebar widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register sidebar widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render sidebar widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render sidebar widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * Render sidebar widget as plain content.
         *
         * Override the default render behavior, don't render sidebar content.
         *
         * @since 1.0.0
         * @access public
         */
        public function render_plain_content()
        {
        }
    }
    /**
     * Elementor social icons widget.
     *
     * Elementor widget that displays icons to social pages like Facebook and Twitter.
     *
     * @since 1.0.0
     */
    class Widget_Social_Icons extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve social icons widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve social icons widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve social icons widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register social icons widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render social icons widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render social icons widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor spacer widget.
     *
     * Elementor widget that inserts a space that divides various elements.
     *
     * @since 1.0.0
     */
    class Widget_Spacer extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve spacer widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve spacer widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve spacer widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the spacer widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register spacer widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render spacer widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render spacer widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor star rating widget.
     *
     * Elementor widget that displays star rating.
     *
     * @since 2.3.0
     */
    class Widget_Star_Rating extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve star rating widget name.
         *
         * @since 2.3.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve star rating widget title.
         *
         * @since 2.3.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve star rating widget icon.
         *
         * @since 2.3.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.3.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register star rating widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * @since 2.3.0
         * @access protected
         */
        protected function get_rating()
        {
        }
        /**
         * Print the actual stars and calculate their filling.
         *
         * Rating type is float to allow stars-count to be a fraction.
         * Floored-rating type is int, to represent the rounded-down stars count.
         * In the `for` loop, the index type is float to allow comparing with the rating value.
         *
         * @since 2.3.0
         * @access protected
         */
        protected function render_stars($icon)
        {
        }
        /**
         * @since 2.3.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor tabs widget.
     *
     * Elementor widget that displays vertical or horizontal tabs with different
     * pieces of content.
     *
     * @since 1.0.0
     */
    class Widget_Tabs extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve tabs widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve tabs widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve tabs widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register tabs widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render tabs widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render tabs widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor testimonial widget.
     *
     * Elementor widget that displays customer testimonials that show social proof.
     *
     * @since 1.0.0
     */
    class Widget_Testimonial extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve testimonial widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve testimonial widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve testimonial widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register testimonial widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render testimonial widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render testimonial widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        protected function render_testimonial_description()
        {
        }
    }
    /**
     * Elementor text editor widget.
     *
     * Elementor widget that displays a WYSIWYG text editor, just like the WordPress
     * editor.
     *
     * @since 1.0.0
     */
    class Widget_Text_Editor extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve text editor widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve text editor widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve text editor widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the text editor widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register text editor widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render text editor widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render text editor widget as plain content.
         *
         * Override the default behavior by printing the content without rendering it.
         *
         * @since 1.0.0
         * @access public
         */
        public function render_plain_content()
        {
        }
        /**
         * Render text editor widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor toggle widget.
     *
     * Elementor widget that displays a collapsible display of content in an toggle
     * style, allowing the user to open multiple items.
     *
     * @since 1.0.0
     */
    class Widget_Toggle extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve toggle widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve toggle widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve toggle widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register toggle widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render toggle widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render toggle widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Elementor video widget.
     *
     * Elementor widget that displays a video player.
     *
     * @since 1.0.0
     */
    class Widget_Video extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * Retrieve video widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve video widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve video widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the video widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 2.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register video widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render video widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render video widget as plain content.
         *
         * Override the default behavior, by printing the video URL insted of rendering it.
         *
         * @since 1.4.5
         * @access public
         */
        public function render_plain_content()
        {
        }
        /**
         * Get embed params.
         *
         * Retrieve video widget embed parameters.
         *
         * @since 1.5.0
         * @access public
         *
         * @return array Video embed parameters.
         */
        public function get_embed_params()
        {
        }
        /**
         * Whether the video widget has an overlay image or not.
         *
         * Used to determine whether an overlay image was set for the video.
         *
         * @since 1.0.0
         * @access protected
         *
         * @return bool Whether an image overlay was set for the video.
         */
        protected function has_image_overlay()
        {
        }
        /**
         * @since 2.1.0
         * @access private
         */
        private function get_embed_options()
        {
        }
        /**
         * @since 2.1.0
         * @access private
         */
        private function get_hosted_params()
        {
        }
        /**
         * @param bool $from_media
         *
         * @return string
         * @since 2.1.0
         * @access private
         */
        private function get_hosted_video_url()
        {
        }
        /**
         *
         * @since 2.1.0
         * @access private
         */
        private function render_hosted_video()
        {
        }
    }
    /**
     * Elementor WordPress widget.
     *
     * Elementor widget that displays all the WordPress widgets.
     *
     * @since 1.0.0
     */
    class Widget_WordPress extends \Elementor\Widget_Base
    {
        /**
         * WordPress widget name.
         *
         * @access private
         *
         * @var string
         */
        private $_widget_name = null;
        /**
         * WordPress widget instance.
         *
         * @access private
         *
         * @var \WP_Widget
         */
        private $_widget_instance = null;
        /**
         * Whether the widget is a Pojo widget or not.
         *
         * @since 2.0.0
         * @access private
         *
         * @return bool
         */
        private function is_pojo_widget()
        {
        }
        /**
         * Get widget name.
         *
         * Retrieve WordPress/Pojo widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * Retrieve WordPress/Pojo widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the WordPress/Pojo widget belongs to.
         *
         * Used to determine where to display the widget in the editor.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories. Returns either a WordPress category or Pojo category.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget icon.
         *
         * Retrieve WordPress/Pojo widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon. Returns either a WordPress icon or Pojo icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        public function get_help_url()
        {
        }
        /**
         * Whether the reload preview is required or not.
         *
         * Used to determine whether the reload preview is required.
         *
         * @since 1.0.0
         * @access public
         *
         * @return bool Whether the reload preview is required.
         */
        public function is_reload_preview_required()
        {
        }
        /**
         * Retrieve WordPress/Pojo widget form.
         *
         * Returns the WordPress widget form, to be used in Elementor.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget form.
         */
        public function get_form()
        {
        }
        /**
         * Retrieve WordPress/Pojo widget instance.
         *
         * Returns an instance of WordPress widget, to be used in Elementor.
         *
         * @since 1.0.0
         * @access public
         *
         * @return \WP_Widget
         */
        public function get_widget_instance()
        {
        }
        /**
         * Retrieve WordPress/Pojo widget parsed settings.
         *
         * Returns the WordPress widget settings, to be used in Elementor.
         *
         * @access protected
         * @since 2.3.0
         *
         * @return array Parsed settings.
         */
        protected function get_init_settings()
        {
        }
        /**
         * Register WordPress/Pojo widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render WordPress/Pojo widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render WordPress/Pojo widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 2.9.0
         * @access protected
         */
        protected function content_template()
        {
        }
        /**
         * WordPress/Pojo widget constructor.
         *
         * Used to run WordPress widget constructor.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $data Widget data. Default is an empty array.
         * @param array $args Widget arguments. Default is null.
         */
        public function __construct($data = [], $args = null)
        {
        }
        /**
         * Render WordPress/Pojo widget as plain content.
         *
         * Override the default render behavior, don't render widget content.
         *
         * @since 1.0.0
         * @access public
         *
         * @param array $instance Widget instance. Default is empty array.
         */
        public function render_plain_content($instance = [])
        {
        }
    }
}
namespace Elementor {
    /**
     * Create new template library dialog types.
     *
     * Filters the dialog types when printing new template dialog.
     *
     * @since 2.0.0
     *
     * @param array    $types          Types data.
     * @param Document $document_types Document types.
     */
    $types = null;
}
namespace {
    function bfi_thumb($url, $params = array(), $single = \true)
    {
    }
    function bfi_wp_image_editor($editorArray)
    {
    }
    function bfi_image_resize_dimensions($payload, $orig_w, $orig_h, $dest_w, $dest_h, $crop = \false)
    {
    }
    function bfi_image_downsize($out, $id, $size)
    {
    }
}

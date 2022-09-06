# codeigniter-todo
This is ToDo example create with CodeIgniter MY_MODEL which support basic <b>CRUD</b> operations.

<strong>Note:</strong> This MODEL only supports basic CURD, for compplex queries use Query Builder. 

This application allows you to add ToDo items with following details: Title, Status[ Pending, Completed ], Desciption, Created On, Modified On. 


<h1>Prerequisite</h1>

1. PHP 8.1
2. MariaDB
3. Apache 
4. .htaccess enabled in Apache Configuration.

<pre> For LAMP installation steps scroll to bottom of the ReadMe, have added the steps to install LAMP on CentOS 7.4/7.8/7.9</pre>

<h1>Installation</h1>
<ul>
<li> Unzip the package. </li>
<li> Upload the Todo folders and files to your server. Normally the index.php file will be at your root. </li>
<li> Open the application/config/config.php file with a text editor and set your base URL. If you intend to use encryption or sessions, set your encryption key. </li>
<li> If you intend to use a database, open the application/config/database.php file with a text editor and set your database settings. </li>
<li> Go to your browser and type in <code> https://YOUR-HOST/Todo/migrate</code> - This will populate the table structre required for the application.
</ul>

<h1>Usage</h1>

<ul>
<li>The application is simple to use you, to open it just type in your http://HOST/IP/Todo . </li>
<li>To use MY_MODEL, place MY_Model.php under /application/core to your applications CORE folder. Make sure your the MODELS you create extend to this MY_Model.
</ul>

Model Example:

<pre>



class Your_Model extends MY_Model {
    
    protected $_table_name = 'your-table';
    protected $_timestamps = true;
    
    function __construct() {
        parent::__construct();
    }
    public $rules = array(
        'title' => array(
            'field' => 'title', 
            'label' => 'Title', 
            'rules' => 'trim|required'
        ), 
        'status' => array(
            'field' => 'status', 
            'label' => 'Status', 
            'rules' => 'trim|required'
        ),
        'description' => array(
            'field' => 'description', 
            'label' => 'Description', 
            'rules' => 'trim|required'
        )
    );
		
		
</pre>



<h4>Create</h4>
To insert into database you can use the method -  save(). 


<i>Sample Code</i>


<pre>
	  
      $data = $this->Todo_M->array_from_post(array('title','description','status'));
      $rules = $this->Todo_M->rules;
      $this->form_validation->set_rules($rules);
      // Process the form
      if ($this->form_validation->run() == TRUE) {
        
         $this->Todo_M->save($data,$id);
         redirect('todo/index');
      }

</pre>



<h4>Read</h4>

To Select data from the table use the medthod - get()
<i> Sample Code </i>

<code> $todos = $this->data['todos']  = $this->Todo_M->get(); </code>


<h4>Update</h4>
To update the table values the same method as inserting data  -  Save.

If an `id` is passed to save() method it will update the table otherwise insert into table.
To insert data, you can pass null inside id parameter.

<h4>Delete</h4>

To delete the data you can use delete() method.
Default filter is set to `id`, however you may specify any other filter by defining it in your model.

<i> Sample Code </i>

<pre>$this->Todo_M->delete($id); </pre>



<h1>Future Enhancements/Backlogs items. </h1>
The current MY_Model support CRUD along with timestamps, but with further release we can add feature list `Soft Deletes`, `Pagination Support`, `Relations Ships`.



<h1> LAMP Installation steps </h1>

Use the following command to install LAMP stack.

<ul>

<li> 
PHP 7.0 Installation (You may spcecify PHP 8.0 repos too )
<pre>
sudo rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm &>>$INSTALL_LOG
sudo rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm &>>$INSTALL_LOG
sudo yum -y install php70w php70w-cli php70w-common php70w-json php70w-pecl-xdebug php70w-mysqlnd php70w-json php70w-xml php70w-pgsql &>>$INSTALL_LOG
</pre>
</li>


<li>
Apache Installation
<pre>

sudo yum -y install net-tools &>>$INSTALL_LOG
sudo yum -y install httpd &>>$INSTALL_LOG
sudo yum -y install mod_ssl &>>$INSTALL_LOG

sudo firewall-cmd --permanent --add-service=https &>>$INSTALL_LOG
sudo firewall-cmd --reload &>>$INSTALL_LOG
sudo systemctl start httpd &>>$INSTALL_LOG
sudo systemctl enable httpd  &>>$INSTALL_LOG
</pre>
</li>


<li>
<pre>
sudo yum install MariaDB-server
sudo systemctl start mariadb.service
sudo mysql_secure_installation
</pre>
</li>

</ul>

<?php  
class Crud extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Crud_model');
	}
	public function dispdata()
	{
	$result['data']=$this->Hello_model->display_records();
	$this->load->view('display_records',$result);
	}
	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Crud_model->displayrecordsById($id);
	$this->load->view('update_records',$result);
	
		if($this->input->post('update'))
		{
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$this->Crud_model->update_records($first_name,$last_name,$email,$id);
		echo "Date updated successfully !”;
		}
	}
	
}
?>
Crud_model.php
<?php
class Crud_model extends CI_Model 
{
    /*Display*/
	function display_records()
	{
	$query=$this->db->query("select * from crud");
	return $query->result();
	}
        function displayrecordsById($id)
	{
	$query=$this->db->query("select * from form where id='".$id.”’”);
	return $query->result();
	}
	/*Update*/
	function update_records($first_name,$last_name,$email,$id)
	{
	$query=$this->db->query("update form SET first_name='$first_name',last_name='$last_name',email='$email' where id='$id’”);
	}
	
}
display_records.php (View file for fetch data)
<!DOCTYPE html>
<html>
<head>
<title>Delete records</title>
</head>
 
<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email Id</th>
   <th>Update</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->first_name."</td>";
  echo "<td>".$row->last_name."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td><a href=‘updatedata?id=".$row->id."'>Update</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
 
</body>
</html>
update_records.php (View file for update)
<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
</head>
 
<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="first_name" value="<?php echo $row->first_name; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="last_name" value="<?php echo $row->last_name; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="email" value="<?php echo $row->email; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update_Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>
public function update_acct()
	{
	$updateacct = $this->account_model->acctype($acctid);
	if(!empty($data['updateacct'])){
		$this->load->view('pages/accounts/update_account',$data);
	}else{
		redirect(site_url());
	}
}
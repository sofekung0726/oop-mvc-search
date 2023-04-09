<?php
class Course{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getCourse()
    {
        $sql = "SELECT * FROM sci_cs";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }


     public function getCourseDetail($cs_id)
    {
        $sql = "SELECT * FROM sci_cs where cs_id = ".$cs_id;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    public function addCourse($data_course)
    {
        $sql = "INSERT INTO `sci_cs` (`cs_id`, `cs_name`, `cs_img`, `cs_date`, `cs_wallet`, `cs_range_date`, `cs_fcourse`, 
        `cs_time`, `cs_location`, `cs_group`, `cs_detail`, `cs_perform`, `cs_reward`, `cs_schedule`, `cs_phone`)";
        $sql .= " VALUES ('', :cs_name, :cs_img, :cs_date, :cs_wallet , :cs_range_date , :cs_fcourse
        , :cs_time , :cs_location, :cs_group, :cs_detail, :cs_perform , :cs_reward , :cs_schedule, :cs_phone);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_course)){
            return true;
        }else {
            return false;
        }
    }

    public function delCourse($cs_id)
    {
        $sql = "DELETE FROM `sci_cs` WHERE `cs_id`='".$cs_id."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function editCourse($cs_id, 
    $cs_name,$cs_img,$cs_date,$cs_wallet,$cs_range_date,$cs_fcourse,$cs_time,
    $cs_location,$cs_group,$cs_detail,$cs_perform,$cs_reward,$cs_schedule,$cs_phone)
    {
        $sql = "UPDATE sci_cs SET cs_name='$cs_name',
        cs_img='$cs_img',
        cs_date='$cs_date',
        cs_wallet='$cs_wallet',
        cs_range_date='$cs_range_date',
        cs_fcourse='$cs_fcourse',
        cs_time='$cs_time',
        cs_location='$cs_location',
        cs_group='$cs_group',
        cs_detail='$cs_detail',
        cs_perform='$cs_perform',
        cs_reward='$cs_reward',
        cs_schedule='$cs_schedule',
        cs_phone='$cs_phone' 
        WHERE cs_id='$cs_id'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
        mysqli_close($this->ConDB);
    }


}
?>
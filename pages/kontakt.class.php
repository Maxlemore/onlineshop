	<?php
		class kontakt{
			function __construct($mysqli){
				$this->db = $mysqli;
			}

			function write_contact_phone($name,$mail,$phone,$betreff,$inhalt){
				$this->db->query("INSERT INTO kontakt (Name,mail,phone,betreff,nachricht,status) VALUES ('$name','$mail','$phone','$betreff','$inhalt',0)")or die($this->db->error);
				return true;
			}
			
			function write_contact_no($name,$mail,$betreff,$inhalt){
				$this->db->query("INSERT INTO kontakt (Name,mail,betreff,nachricht,status) VALUES ('$name','$mail','$betreff','$inhalt',0)")or die($this->db->error);
				return true;
			}
			
			function read_contact(){
				$kontakte = $this->db->query("SELECT * FROM kontakt")or die($this->db->error);
				$i = 0;
				if($kontakte->num_rows > 0){
					while($kontakt = $kontakte->fetch_object()){
						$this->name[$i] = $kontakt->Name;
						$this->mail[$i] = $kontakt->mail;
						$this->phone[$i] = $kontakt->phone;
						$this->betreff[$i] = $kontakt->betreff;
						$this->nachricht[$i] = $kontakt->nachricht;
						$this->status[$i] = $kontakt->status;
						$this->id[$i] = $kontakt->kid;
						$i++;
					}
					return true;
				}
				else{
					return false;
				}
			}
			
			function mv_contact($id){
				$this->db->query("UPDATE kontakt SET status = 1 WHERE kid = $id")or die($this->db->error);
				return true;
			}
			
			function rm_contact($id){
				$this->db->query("Delete from kontakt WHERE kid = $id")or die($this->db->error);
				return true;
			}
			
			function pr_contact($id){
				$this->db->query("UPDATE kontakt SET status = 0 WHERE kid = $id")or die($this->sb->error);
				return true;
			}
		}
	?>
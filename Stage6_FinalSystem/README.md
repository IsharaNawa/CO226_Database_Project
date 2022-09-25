	
	First steps to take before marking...
	
		1.Run the CO226ProjectGroup14PhysicalModel.sql file to create the complete database.
		2.Run the CO226ProjectGroup14PopulatedModel.sql file to populate the complete database.
		3.Copy all files in the LocalHostFiles to the location of the local host.(For XAMPP "C:\xampp\htdocs")
		4.Open a web browser and open the main webpage of the database by  entering "http://localhost/main_page.html" .
	
	Using main page , the following features can be performed.
		
		1.REGISTER NOW 
			
			-Register a new patient by filling the  form.
			-PERSON,PATIETN and PATIENALLERGY tables are updated accordingly.
			-If the current patient is already in the database , an error will be 
			 shown and the entry will be ignored.
			
		2.VIEW YOUR MEDICAL REPORT 
			
			-NID of a patient should be input.
			-If the patient do not have any medical reports an error will be shown.
			 (To test this case enter 68759045V as NID)
			-If the patient is not found on the database an error will be shown.
			 (To test this case enter 81536022V as NID)
			-If there are multiple reports for a single patient all of them will be 
			 displayed.(To test this case enter 81536122V as NID)
			-Since the actual reports are not presented, only the information of them 
			 are displayed.
			 
		3.DOCTOR LOGIN
		
			-To secure the privacy of patients,these information are only available for 
			 doctor.
			-To log as a doctor, NID and corresponding PASSWORD should input which are 
			in the DOCTOR table of the database.(For marking purpose use 67123821v as NID
			and EQ4j49s_ as PASSWORD)
			
			>>GET PATIENT INFO
			
				-To view information of a patient , NID of the patient should be input.
				-If the corresponding NID is not in the system as a patient,an error 
				will be displayed.
			
			>>INSERT NEW TREATMENT RECORD
				
				-Using this, an entry to the TREATSON table will be inserted.
				-Corresponding fields in the form should be filled accordingly.
				-An error will be shown for a duplicated entry.
			
		4.ADMIN LOGIN
		
			-There is only one admin manages the database and he/she will be logged into 
			the system by using password 12345678.
			
			>>INSERT MEDICINE STOCK:
			
				-An entry to the MEDICINE table will be inserted when filled accordingly.
			
			>>REGISTER PATIENT IN THE WARD:
			
				-A new patient will be registered to the ward.An entry to the REGISTERED 
				table will be inserted.
				-Doesnt work for patients who are already admitted to the ward.
				-Number of available beds in the ward will be decreased by 1 automatically 
				when adding a new patient to the ward.
			
			>>DISCHARGE PATIENT FROM THE WARD:
				
				-A patient will be discharged from the ward.Patient who is already in the 
				ward should be input.Otherwise this will not work.
				-Number of available beds in the ward will be increased by 1 automatically 
				when adding a new patient to the ward.
			
		5.STAFF INFO
		
			-To view the information of doctor and employee.
			-NID of the doctor or employee should be input.
			
			
		6.CONTACT US
		
			-Contact information of the hospital.
			
		
			
			
			
			
		
		
		
		
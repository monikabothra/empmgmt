<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="mb-3">Add Employee Details</h1>
								
                            <form method="post" action="{{ route('employee.update',$employee->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value = "{{$employee->id}}">
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Name</span>
								</label>
								<input type="text" class="form-control form-control-solid" name="empname" value = "{{$employee->empname}}" />
                                <br>
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Mobile No.</span>
								</label>
								<input type="text" class="form-control form-control-solid" value = "{{$employee->empnumber}}" name="empnumber" />
                                <br>
							
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Email</span>
								</label>
								<input type="text" class="form-control form-control-solid" value = "{{$employee->empemail}}" name="empemail" />
                                <br>
							
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Address</span>
								</label>
								<input type="text" class="form-control form-control-solid" value = "{{$employee->empaddress}}" name="empaddress" />
                                <br>
								
									<label class="required fs-6 fw-bold mb-2">Qualification</label>
									<input type="text" class="form-control form-control-solid" value = "{{$employee->empqualification}}" name="empqualification" />
                                    <br>
								
									<label class="required fs-6 fw-bold mb-2">Date of Birth</label>
									<!--begin::Input-->
										<input type="date" class="form-control form-control-solid " value = "{{$employee->empdob}}" name="empdob" />
                                        <br>
									
										<label class="required fs-6 fw-bold mb-2">Key Skills</label>
											<input class="form-control form-control-solid " value = "{{$employee->empkeyskills}}" name="empkeyskills" />	
                                            <br>
										
                                            <label class="required fs-6 fw-bold mb-2">Marital Status</label>
										<select class="form-select form-select-solid"  name="empstatus" value = "{{$employee->empstatus}}">empstatus
											<option selected disabled>Select...</option>
											<option value="1">Married</option>
											<option value="2">Unmarried</option>	
										  </select>
                                          <br>
									
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Father/Husband </span>
								</label>
								<input type="text" class="form-control form-control-solid" value = "{{$employee->fhname}}" name="fhname" />
                                <br>
								
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">His Contact</span>
								</label>
								<input type="text" class="form-control form-control-solid" value = "{{$employee->hisnumber}}" name="hisnumber" />
                                <br>
								
                                <label class="required fs-6 fw-bold mb-2">Date of Joining</label>
									<!--begin::Input-->
										<input type="date" class="form-control form-control-solid " value = "{{$employee->empdoj}}" name="empdoj" />
                                        <br>
								
                                        <label class="required fs-6 fw-bold mb-2">Branch</label>
									<select class="form-select form-select-solid"  name="empbranch">
										<option selected disabled>Select Branch</option>
										<option value="1">Bikaner</option>
										<option value="2">Vizag</option>	
										<option value="3">Raipur</option>
									
									  </select>
                                      <br>
								
									<label class="required fs-6 fw-bold mb-2">Employment field</label>
									<select class="form-select form-select-solid"  name="empfield">
										<option selected disabled>Select Field</option>
										<option value="1">Office</option>
										<option value="2">Khet</option>	
										<option value="3">Site</option>
									  </select>
                                      <br>
								
									<label class="required fs-6 fw-bold mb-2">Department</label>
									<select class="form-select form-select-solid"  name="empdpt">
										<option selected disabled>Select Department</option>
										<option value="1">IT</option>
										<option value="2">Operator</option>	
									  </select>
                                      <br>
								
									<label class="required fs-6 fw-bold mb-2">Position</label>
									<input type="text" class="form-control form-control-solid " value = "{{$employee->empposition}}" name="empposition" />
                                    <br>
								
									<label class="required fs-6 fw-bold mb-2">Basic Salary</label>
									<input type="text" class="form-control form-control-solid " value = "{{$employee->empsalary}}" name="empsalary" />
                                    <br>
								
									<label class="required fs-6 fw-bold mb-2">Office In</label>
									<input type="text" class="form-control form-control-solid " value = "{{$employee->empin}}" name="empin" />
                                    <br>
								
									<label class="required fs-6 fw-bold mb-2">Office Out</label>
									<input type="text" class="form-control form-control-solid " value = "{{$employee->empout}}" name="empout" />
                                    <br>
															
									<label class="required fs-6 fw-bold mb-2">Picture</label>
									<input type="file" class="form-control form-control-solid " value = "{{$employee->photo}}" name="photo" />
                                    <br>
								
									<label class="fs-6 fw-bold mb-2">Remarks</label>
								<textarea class="form-control form-control-solid" rows="2" name="remarks">{{$employee->remarks}}</textarea>
                                <br>
								
								<button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
								<button type="submit" class="btn btn-primary" value="Submit">Update</button>
							
						</form>
</body>
</html>
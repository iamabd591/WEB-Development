<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAMILY LAW CLIENT INTERVIEW FORM</title>
    <style>
        body {
            background: #000;
        }

        label {
            font-size: 20px;
            font-weight: bold;
            margin: 12px 8px;
            width: 100px;
            border: 1px solid #000;
            padding: 5px;
        }

        input {
            outline: none;
        }

        legend,
        fieldset {
            color: #fff;

        }

        .btn-outline-success {
            background: transparent;
            color: #f70505;
            padding: 10px;
            margin: 8px;
            font-size: 22px;
            outline: none;
            border: 1px solid #f70505;
            cursor: pointer;
            transition: 0.5s;
            font-weight: 100;
        }

        .btn-outline-success:hover {
            background: #f70505;
            color: #fff;
        }

        .btn-outline-danger {
            background: transparent;
            color: #5bfa05;
            padding: 10px;
            margin: 8px;
            font-size: 22px;
            outline: none;
            border: 1px solid #5bfa05;
            cursor: pointer;
            transition: 0.5s;
            font-weight: 100;
        }

        .btn-outline-danger:hover {
            background: #5bfa05;
            color: #fff;
        }
        .note , span {
           color: #f70505;
           padding:5px;
           margin:5px;
        }
    </style>
</head>

<body>
    <form action="./Thanks.php" method="POST">
        <fieldset>
            <legend>
                <h1>FAMILY LAW CLIENT INTERVIEW FORM</h1>
            </legend>

            <div class="note">NOTE: * Write "Not Applicable" on those Question which are related to You </div>
            <div class="form-group">
                <label for="Name">Name <span>*</span></label>
                <input type="text" placeholder="Enter Your Name" name="nane" style="margin-left:100px;">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Date <span>*</span></label>
                <input type="Date" style="margin-left:110px;" name="date">
            </div>
            <br>
            <br>
            <fieldset>
                <legend><b>1. Please provide your full name, date and place of birth:</b></legend>
                <label for="fname">Name:</label>
                <input type="text" id="name" name="f1" style="margin-left:100px;"><br><br>
                <label for="Place">Place of Birth:</label>
                <input type="text" id="pob" name="f2" style="margin-left:35px;"><br><br>
                <label for="Dob">Date of Birth:</label>
                <input type="Date" id="dob" name="f3" style="margin-left:40px;"><br><br>
                <fieldset>
                    <legend><b>Where are you living now?:</b></legend>
                    <label for="Address">Address:</label>
                    <input type="text" id="address" name="f4" style="margin-left:175px;"><br><br>
                    <label for="tel">Residence Telephone:</label>
                    <input type="text" id="tel" name="f5" style="margin-left:66px;"><br><br>
                    <label for="mobile">Mobile:</label>
                    <input type="text" id="mobile" name="f6" style="margin-left:185px;"><br><br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="f7" style="margin-left:195px;"><br><br>
                </fieldset>
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend><b>2. Please complete the following concerning your employment:</b></legend>
                <label for="emp">Employer:</label>
                <input type="text" id="emp" name="f8" style="margin-left:175px;"><br><br>
                <label for="job">Job Title:</label>
                <input type="text" id="job" name="f9" style="margin-left:185px;"><br><br>
                <label for="Address">Address:</label>
                <input type="text" id="address" name="f10" style="margin-left:190px;"><br><br>
                <label for="tel_num">Telephone Number:</label>
                <input type="text" id="tel_num" name="f11" style="margin-left:95px;"><br><br>
                <label for="salary">Gross salary/monthly Rs:</label>
                <input type="text" id="salary" name="f12" style="margin-left:48px;"><br><br>
                <label for="anual">Annual gross Rs:</label>
                <input type="text" id="anual" name="f13" style="margin-left:118px;"><br><br>
                <label for="Dur">Length of employment:</label>
                <input type="text" id="Dur" name="f14" style="margin-left:64px;"><br><br>
                <label for="edu">Education/Training:</label>
                <input type="text" id="edu" name="f15" style="margin-left:90px;"><br><br>
            </fieldset>

            <br>
            <br>
            <fieldset>
                <legend><b>3. Please provide your spouse’s full name, date and place of birth, Social Security number, driver’s license number:</b></legend>
                <label for="s_fname">Name:</label>
                <input type="text" id="s_fname" name="f16" style="margin-left:175px;"><br><br>
                <label for="S_Place">Place of Birth:</label>
                <input type="text" id="S_pob" name="f17" style="margin-left:108px;"><br><br>
                <label for="S_Dob">Date of Birth:</label>
                <input type="Date" id="dob" name="f18" style="margin-left:175px;"><br><br>
                <label for="">Social Security:</label>
                <input type="text" id="dob" name="f19" style="margin-left:95px;"><br><br>
                <label for="license">Driver’s License No:</label>
                <input type="text" id="dob" name="f20" style="margin-left:52px;"><br><br>
            </fieldset>

            <br>
            <br>
            <fieldset>
                <legend><b>4. Where are your spouse’s living now?:</b></legend>
                <label for="Address">Address:</label>
                <input type="text" id="address" name="f21" style="margin-left:175px;"><br><br>
                <label for="tel">Residence Telephone:</label>
                <input type="text" id="tel" name="f22" style="margin-left:65px;"><br><br>
                <label for="mobile">Mobile:</label>
                <input type="text" id="mobile" name="f23" style="margin-left:185px;"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="f24" style="margin-left:190px;"><br><br>
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend><b>5. Please complete the following concerning your spouse’semployment:</b></legend>
                <label for="emp">Employer:</label>
                <input type="text" id="emp" name="f25" style="margin-left:175px;"><br><br>
                <label for="job">Job Title:</label>
                <input type="text" id="job" name="f26" style="margin-left:185px;"><br><br>
                <label for="Address">Address:</label>
                <input type="text" id="address" name="f27" style="margin-left:190px;"><br><br>
                <label for="tel_num">Telephone Number:</label>
                <input type="text" id="tel_num" name="f28" style="margin-left:94px;"><br><br>
                <label for="salary">Gross salary/monthly Rs:</label>
                <input type="text" id="salary" name="salary" style="margin-left:45px;"><br><br>
                <label for="anual">Annual gross Rs :</label>
                <input type="text" id="anual" name="f29" style="margin-left:109px;"><br><br>
                <label for="Dur">Length of employment</label>
                <input type="text" id="Dur" name="f29" style="margin-left:67px;"><br><br>
                <label for="edu">Education/Training:</label>
                <input type="text" id="edu" name="f30" style="margin-left:85px;"><br><br>
            </fieldset>

            <br>
            <br>
            <fieldset>
                <legend><b>7. Please provide the date and place of your marriage:</b></legend>
                <label for="">Date :</label>
                <input type="Date" id="" name="f31" style="margin-left:175px;"><br><br>
                <label for="">City/State:</label>
                <input type="text" id="dob" name="f32" style="margin-left:135px;"><br><br>
            </fieldset>

            <br>
            <br>
            <fieldset>
                <legend><b>9. If there are any children of this marriage, please provide all requested information:</b></legend>
                <table border="1px">
                    <thead>
                        <tr>
                            <th>Sr</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>DOB</th>
                            <th>Place of birth</th>
                            <th>Residence</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><input type="text" name="f33"></td>
                            <td><input type="text" name="f34"></td>
                            <td><input type="text" name="f35"></td>
                            <td><input type="date" name="f36"></td>
                            <td><input type="text" name="f37"></td>
                            <td><input type="text" name="f39"></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="f40"></td>
                            <td><input type="text" name="f41"></td>
                            <td><input type="text" name="f42"></td>
                            <td><input type="date" name="f43"></td>
                            <td><input type="text" name="f44"></td>
                            <td><input type="text" name="f45"></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="f46"></td>
                            <td><input type="text" name="f47"></td>
                            <td><input type="text" name="f48"></td>
                            <td><input type="date" name="f49"></td>
                            <td><input type="text" name="f50"></td>
                            <td><input type="text" name="f51"></td>
                        </tr>
                    </tbody>
                </table>
                <label for="">1. Do the child(ren) have health insurance?</label>
                <input type="radio" id="dob" name="f52" >Yes
                <input type="radio" id="dob" name="f53">No<br><br>
                <label for="">2. Name of insurance company:</label>
                <input type="text" id="" name="f53" style="margin-left:240px;"><br><br>
                <label for="">3. Group number:</label>
                <input type="text" id="" name="f53" style="margin-left:355px;"><br><br>
                <label for="">4. Party responsible for premium?</label>
                <input type="text" name="f54" style="margin-left:218px;"><br><br>

                <label for="">5. Monthly cost of premium ?</label>
                <input type="text" name="f55" style="margin-left:260px;"><br><br>

                <label for="">6. Is the insurance covered through a parent’s employment ?</label>
                <input type="text" name="f56"><br><br>
            </fieldset>

            <br>
            <br>
            <fieldset>
                <legend></legend>

                <label for="">7. Will there be a dispute over custody of the children?:</label>
                <input type="text" id="" name="f57"><br><br>

                <label for="">8. If not, who will have custody?</label>

                <input type="text" id="" name="f58" style="margin-left:195px;"><br><br>

                <fieldset>
                    <legend><b>10. Special circumstances of children and/or spouses:</b></legend>
                    <label for="">1. special needs : </label>
                    <input type="text" name="f59" style="margin-left:240px;"><br><br>

                    <label for="">2. religious issues : </label>
                    <input type="text" name="f60" style="margin-left:220px;"><br><br>


                    <label for="">4. What are your grounds for divorce : </label>
                    <input type="text" name="f61" style="margin-left:50px;"><br><br>


                    <label for="">5. Date of separation : </label>
                    <input type="date" name="f62" style="margin-left:190px;"><br><br>
                </fieldset>

                <br>
                <br>
                <fieldset>
                    <legend><b>11. Other Marriage</b></legend>
                    <label for="">1. If you have you been married before, how many times? : </label>
                    <input type="number" name="f63"><br><br>

                    <fieldset>
                        <legend><b>If there are children from a previous marriage or other relationship, please provide all requested information:</b></legend>
                        <table border="1px">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>DOB</th>
                                    <th>Place of birth</th>
                                    <th>Residence</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><input type="text" name="f64"></td>
                                    <td><input type="text" name="f65"></td>
                                    <td><input type="text" name="f66"></td>
                                    <td><input type="date" name="f67"></td>
                                    <td><input type="text" name="f68"></td>
                                    <td><input type="text" name="f69"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="f70"></td>
                                    <td><input type="text" name="f71"></td>
                                    <td><input type="text" name="f72"></td>
                                    <td><input type="date" name="f73"></td>
                                    <td><input type="text" name="f74"></td>
                                    <td><input type="text" name="f75"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="f76"></td>
                                    <td><input type="text" name="f77"></td>
                                    <td><input type="text" name="f78"></td>
                                    <td><input type="date" name="f79"></td>
                                    <td><input type="text" name="f80"></td>
                                    <td><input type="text" name="f81"></td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>


                    <fieldset>
                        <legend><b>12. If your spouse have you been married before?</b></legend>
                        <label for="">1. If your spouse have you been married before, how many times? : </label>
                        <input type="number" name="f82"><br><br>

                        <label for="">2. If there are children from a previous marriage or other relationship, please provide all requested information:</label>
                        <table border="1px">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>DOB</th>
                                    <th>Place of birth</th>
                                    <th>Residence</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><input type="text" name="f83"></td>
                                    <td><input type="text" name="f84"></td>
                                    <td><input type="text" name="f85"></td>
                                    <td><input type="date" name="f86"></td>
                                    <td><input type="text" name="f87"></td>
                                    <td><input type="text" name="f88"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="f89"></td>
                                    <td><input type="text" name="f90"></td>
                                    <td><input type="text" name="f91"></td>
                                    <td><input type="date" name="f92"></td>
                                    <td><input type="text" name="f93"></td>
                                    <td><input type="text" name="f94"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="f95"></td>
                                    <td><input type="text" name="f96"></td>
                                    <td><input type="text" name="f97"></td>
                                    <td><input type="date" name="f98"></td>
                                    <td><input type="text" name="f99"></td>
                                    <td><input type="text" name="f100"></td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </fieldset>
            </fieldset>

            <br>
            <br>
            <fieldset>
                <legend><b>13. List all Retirement, Pensions, and Savings Plans:</b></legend>
                <label for="">a. Do you participate in any retirement plan or company savings plan?
                    If so, describe the plan(s):</label>
                <input type="text" id="" name="f101" style="margin-left:90px;"><br><br>


                <label for="">b. Does your Spouse participate in any retirement plan or company savings plan?
                    If so, describe the plan(s):</label>
                <input type="text" id="" name="f101"><br><br>
            </fieldset>

            <br>
            <br>
            <fieldset>
                <legend><b>14. List any other Deferred Compensation Benefits: (e.g., workers' compensation, disability benefits, bonuses and other "special payments," employee stock options, and other forms of compensation):</b></legend>
                <label for="">a. Name or type of your benefit:</label>
                <input type="text" id="" name="f102" style="margin-left:140px;"><br><br>


                <label for="">b. Please describe the benefit:</label>
                <input type="text" id="" name="benifits" style="margin-left:160px;"><br><br>

                <label for="">c. Name or type of your Spouse's benefit:</label>
                <input type="text" id="" name="f103" style="margin-left:65px;"><br><br>


                <label for="">d. Please describe the benefit:</label>
                <input type="text" id="" name="f104" style="margin-left:160px;"><br><br>
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend><b>15. DEBTS</b></legend>
                <label for="">Debts: (Other than house and/or automobiles; e.g., Charge Cards, Personal Loans,etc….)</label><br>
                <input type="text" name="p1" placeholder="Name"> <input type="text" name="f105" placeholder="RS"><br>
                <input type="text" name="p2" placeholder="Name"> <input type="text" name="f106" placeholder="RS"><br>
                <input type="text" name="p3" placeholder="Name"> <input type="text" name="f107" placeholder="RS"><br>
                <input type="text" name="p4" placeholder="Name"> <input type="text" name="f108" placeholder="RS"><br>
                <input type="text" name="p5" placeholder="Name"> <input type="text" name="f109" placeholder="RS"><br>
                <input type="text" name="p6" placeholder="Name"> <input type="text" name="f110" placeholder="RS"><br>
                <input type="text" name="p7" placeholder="Name"> <input type="text" name="f111" placeholder="RS"><br>


                <fieldset>
                    <legend><b>16. Income Tax</b></legend>
                    <label for="">a. Have you filed for all previous years? </label>
                    <input type="radio" name="f112" id="">Yes
                    <input type="radio" name="f112" id="">NO <br><br>

                    <label for="">b. Prepared by whom?</label>
                    <input type="text" name="f113" style="margin-left:140px;"><br><br>

                    <label for="">c. Refund received?</label>
                    <input type="text" name="f114" style="margin-left:165px;"><br><br>

                    <label for="">d. If so, how much? Rs</label>
                    <input type="text" name="f115" style="margin-left:140px;"><br><br>


                </fieldset>

                <fieldset>
                    <legend><b>17. Last Will and Testament:</b></legend>
                    <label for="">a. Do you have a will? </label>
                    <input type="radio" name="f116" id="">Yes
                    <input type="radio" name="f117" id="">NO <br><br>

                    <label for="">b. Prepared by whom?</label>
                    <input type="text" name="f118" style="margin-left:80px;"><br><br>

                    <label for="">c. Prepared by whom?</label>
                    <input type="text" name="f119" style="margin-left:85px;"><br><br>

                    <label for="">d. Does your spouse have a will?</label>
                    <input type="text" name="f120"><br><br>


                </fieldset>

                <fieldset>
                    <legend><b>18. Separate Property:</b></legend>
                    <label for="">a. Do you own any separate property (property owned before marriage or property received as a gift or inheritance)? </label>
                    <input type="radio" name="f113" id="">Yes
                    <input type="radio" name="f114" id="">NO <br><br>

                    <label for="">b. If so, detail property : </label>
                    <input type="text" name="f115"><br><br>

                    <label for="">c. Do your spouse own any separate property (property owned before marriage or property received  as a gift or inheritance)? </label>
                    <input type="radio" name="f116" id="">Yes
                    <input type="radio" name="f117" id="">NO <br><br>

                    <label for="">d. If so, detail property : </label>
                    <input type="text" name="f118"><br><br>
                </fieldset>
            </fieldset>
            <br>
            <input type="reset" value="Reset" class="btn-outline-success">
            <input type="submit" value="Submit" class="btn-outline-danger">
        </fieldset>
    </form>
</body>

</html>
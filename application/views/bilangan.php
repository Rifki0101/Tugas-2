
<main>  
<form name="finput" method="post" action="<?= base_url(); ?>bilangan/output">
		<table  class="table table-success table-striped align-center border border-1" width="80%" cellpadding="5" cellspacing="0">
				<tr>
					<td colspan="2" align="center">Program Bilangan Fibonacci dan Bilangan Prima</td>
				</tr>
                <tr>
					<td colspan="2" align="center">Rifki Setiawan - 2170527</td>
				</tr>
				<tr>
					<td width="45%">Nilai n</td>
					<td width="55%"><input type="text" name="n"></td>
                </tr>
                <tr>
					<td>Metode</td>
					<td><select name="metode">
                        <option value="31">Deret Bilangan Fibonacci</option>
                        <option value="32">Deret Bilangan Prima</option>
                    </select></td>
				</tr>									
					<td colspan="2" align="center">
						<input type="submit" name="tampil" value="Tampil">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
</main> 
<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<!-- <table border="1">
			<tr bgcolor="#9acd32">
				<th>Name</th>
				<th>Matric No.</th>
			</tr>

			<xsl:for-each select="list/student">
				<tr>
					<td><xsl:value-of select="name"/></td>
					<td><xsl:value-of select="matric_no"/></td>
				</tr>
			</xsl:for-each>
		</table> -->

		<xsl:for-each select="list/product">
			<div class="plan-flex">
				<img><xsl:attribute name="src"><xsl:value-of select="pImgPath"/></xsl:attribute></img>

				<h3><xsl:value-of select="pName"/></h3>

				<ul>
					<li class="txt-prod-desc"><xsl:value-of select="pDesc"/></li>
					<li><xsl:value-of select="pDiscount"/>% Discount</li>
					<li class="price">RM <xsl:value-of select="pPrice"/></li>
				</ul>

				<a href="#" class="cta">QUICK VIEW</a>
			</div>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>